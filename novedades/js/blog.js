document.getElementById("btn_enviar").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function() {
        let preview = document.getElementById('div_file2'),
            image = document.createElement('img');

        image.src = reader.result;


        preview.append(image);
    };
}


document.getElementById("btn_enviar2").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function() {
        let preview = document.getElementById('div_file22'),
            image = document.createElement('img');

        image.src = reader.result;


        preview.append(image);
    };
}