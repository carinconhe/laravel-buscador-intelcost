<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Response;

class InterCost extends Controller{
    public  $client;
    /**
     * contructior Class
     */
    public function __construct(Client $client){
        $this->client = $client;
    }

    /**
     * This method call the template home, and call info of request api rest
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request){
        $response   = $this->callExternalService();
        $cities = array_unique(array_column($response,'Ciudad'));
        array_push($cities,'Eliga una ciudad');
        sort($cities);
        $types = array_unique(array_column($response,'Tipo'));
        array_push($types,'Eliga un tipo');
        sort($types);
        return view('home')
                ->with('items',$response)
                ->with('cities',$cities)
                ->with('types',$types);
    }

    public function ajaxRequestPost(){
        $result     = [];
        $success    = true;
        $type       = request()->type;
        $city       = request()->city;
        $response   = $this->callExternalService();
        $cities = array_unique(array_column($response,'Ciudad'));
        array_push($cities,'Eliga una ciudad');
        sort($cities);
        $types = array_unique(array_column($response,'Tipo'));
        array_push($types,'Eliga un tipo');
        sort($types);

        $nameType = $types[$type];
        $nameCity = $cities[$city];

        foreach ($response as $key => $item) {
            if($item['Ciudad']===$nameCity && $item['Tipo']=== $nameType ){
                array_push($result,$item);  
            }
        }

        if(empty($result)){
            $success = false;
        }
        
        return Response::json([ 'success'    => $success ,
                                'results'   => $result,
                                'total'     => count($result)]);
    }

    private function callExternalService(){
        $response = [];
        try{
            $call       = $this->client->get('http://intercost.lcal/data-1.json');
            $response   = json_decode($call->getBody()->getContents(), true);
        }catch (GuzzleException $e){
            $path = storage_path() . "/json/data-1.json"; // ie: /var/www/laravel/app/storage/json/filename.json
            $response = json_decode(file_get_contents($path), true);
        }
        return $response;
    }
}
