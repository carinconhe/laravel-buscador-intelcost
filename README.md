# Laravel-Intelcost-Buscarod
#### Camilo Rincón
#### email carincon@gmail.com
#### Teléfono de contacto: 3203443989

Este repositorio fue creado para prueba de intelcost:

- PHP version 7.2.20
- MySql 5.7.26
- Laravel 6.10.1
- Servidor Web ninx/1.17.1

En el archivo de settings.php se encuentra la confgiuracion de la base de datos, de igual manera se daja una copia de la base de datos en la siguiente ruta del repositorio:

### Url configurada localmente, se creo un virtual host.
```sh
http://intercost.lcal/
```
### Configuración
Una vez se descarga el proyecto de git, es importante tener instalado composer para realizar la instalación

`$ composer install`

`php artisan key:generate`

El Archivo de .env viene la configuración de una base de datos, como no se almacena ninguna información solo se dejo configurado la preterminada.

```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:edRD/Ipzf5JM/9S6KA/YyUXDYXBMVzKog0KlUjwYFSg=
APP_DEBUG=true
APP_URL=http://intercost.lcal

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mysql
DB_USERNAME=root
DB_PASSWORD=
```

### Archivos importantes y rutas
Laravel el path apunta a la siguientes carpeta, en esta carpeta se tiene que aputar document root, esta carpeta encuentra los assets como lo son js y css
```bash
/Sites/buscador-intelcost/public
```
#### Controlladores
Los controladores se encuentran en las siguientes carpeta:
```bash
/Sites/buscador-intelcost/app/Http/Controllers
```
#### Vista
Laravel esta configurado por defecto con blade que es un framework  para manejo de templates, los archivos html se encuentran en las siguientes carpeta:
```bash
/Sites/buscador-intelcost/resources/views
```

### Componentes

Se agragaron los siguientes componentes.

| Complementos | README |
| ------ | ------ |
| guzzlehttp/guzzle |[packagist](https://packagist.org/packages/guzzlehttp/guzzle) |
|Blade Templates|[https://laravel.montogeek.com/5.1/blade]|



License
----

MIT


**Free Software, Hell Yeah!**
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
