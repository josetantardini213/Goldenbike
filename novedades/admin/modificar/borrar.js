$(document).ready(function() {

    $('#borrarfoto').on('click', function() {

        const id = document.querySelector('#borrarfoto').value;

        $.ajax({
                type: 'POST',
                url: './funcionborrarajax/borrar.php',
                data: {
                    'borrarfoto': 'borrarfoto',
                    'id': id

                },
                beforeSend: function() {
                    $('#resultfoto').html('...')

                }
            })
            .done(function(response) {
                $('#resultfoto').html(response)

            })


    })
})

$(document).ready(function() {

    $('#borrarportada').on('click', function() {
        const id = document.querySelector('#borrarportada').value;


        $.ajax({
                type: 'POST',
                url: './funcionborrarajax/borrar.php',
                data: {
                    'borrarportada': 'borrarportada',
                    'id': id

                },
                beforeSend: function() {
                    $('#resultportada').html('...')

                }
            })
            .done(function(response) {
                $('#resultportada').html(response)

            })


    })
})