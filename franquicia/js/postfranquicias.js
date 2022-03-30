$(document).ready(function() {
    $('#enviar').focus()

    $('#enviar').on('click', function() {
        var nombrePersona = $('#nombrePersona').val();
        var apellidoPersona = $('#apellidoPersona').val();
        var provincias = $('#provincias').val();
        var localidad = $('#localidad').val();
        var telefono = $('#telefono').val();
        var email = $('#email').val();
        var consulta = $('#consulta').val();
        var enviar = $('#enviar').val();

        $.ajax({
                type: 'POST',
                url: './franquicia/funciones/email.php',
                data: {
                    'nombrePersona': nombrePersona,
                    'apellidoPersona': apellidoPersona,
                    'provincias': provincias,
                    'localidad': localidad,
                    'telefono': telefono,
                    'email': email,
                    'consulta': consulta,
                    'enviar': enviar

                },
                beforeSend: function() {
                    $('#result').html('...')
                }
            })
            .done(function(response) {
                $('#result').html(response)
            })


    })
})