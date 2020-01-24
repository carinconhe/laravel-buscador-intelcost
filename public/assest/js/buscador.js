$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#submitButton').on('click', (e) => {
        e.preventDefault();
        searchData();
    });

    /**
     * This method call ajax information
     */
    function searchData() {
        let city = $('#selectCiudad').val();
        let type = $('#selectTipo').val();
        if (city != 0 && type != 3) {
            $.post(ajaxUrl + '/ajaxRequest/exe/', { 'city': city, 'type': type },
                function(response) {
                    if (response.success == true) {
                        $('#count').html(response.total);
                        $('#results').html('');
                        let data = response.results;
                        let htmlString = '';
                        $.each(data, function(i, element) {
                            htmlString += "<article class='itemMostrado col-lg-4 col-md-6 col-12'>";
                            htmlString += "<div class='content-item p-1'>"
                            htmlString += "<figure>";
                            htmlString += "<img class='img-fluid' src='" + ajaxUrl + "/assest/img/home.jpg' />";
                            htmlString += "</figure>";
                            htmlString += "<div class='info'>";
                            htmlString += "<p> Dirección: " + element.Direccion + "<br>Ciudad: " + element.Ciudad + "<br>Teléfono" + element.Telefono + "<br>Código postal: " + element.Codigo_Postal + "<br>Tipo: " + element.Tipo + "<br>Precio: " + element.Precio + "</p>"
                            htmlString += "</div>";
                            htmlString += "</article>";
                        });
                        $('#results').html(htmlString);

                    } else {
                        alert('Su resultado obtuvo 0 resultados');
                    }
                });
        } else {
            alert('Usted no a seleccionado ninguna ciudad y ningun tipo de vivienda');
        }

    }
});