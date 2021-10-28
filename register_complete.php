
<?php
    include_once('C:\xampp\htdocs\work\database\session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Complete</title>
        <link rel="stylesheet" href="style/noselect.css">
        <link rel="stylesheet" href="style/scroll_bar.css">
        <link rel="stylesheet" href="style/register/main.css">
        <link rel='stylesheet' type='test/css' href='plugins/sweetalert2.min.css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap' rel='stylesheet'> 
        <script src='https://kit.fontawesome.com/2c36e9b7b1.js' crossorigin='anonymous'></script>
        <link rel='stylesheet' href='css/estilos_001.css'>
    </head>
    <body class="noselect">
        <style>
            input, textarea, select{
                background: transparent;
            }
            body{
                background-image: linear-gradient(-45deg, #ffffff 50%, #797979 50%); 
            }
        </style>
        
        <div class="register">
        
            <form id="form">
                <div>
                    <img src="\work\style\img\work-it-black.png">
                </div>
                
                <!------------------------------------------------>
                <div class="form-control">
                    <h4>
                        Escribe tu Nombre:
                    </h4>
                    <input type="text" name="nombre" class="" id="username">
                    <small class="error_small"></small>
                </div>
                <!------------------------------------------------>
                <select class="educacion" id="educacion" name="educacion">
                    <option value="0">Selecciona tu nivel de Educacion:</option>
                    <option value="1">Kinder</option>
                    <option value="2">Primaria</option>
                    <option value="3">Secundaria</option>
                    <option value="4">Preparatoria</option>
                    <option value="5">Universidad</option>
                </select>



                <div class="categorias">
                    <select id="select_1" id="categoria_laboral" class="">
                        <option value='0'>Selecciona tu Categoria:</option>
                        <option value="1">Leyes</option>
                        <option value="2">Comunicacion</option>
                        <option value="3">Medica</option>
                        <option value="4">Industrial</option>
                        <option value="5">Oficios</option>
                        <option value="6">Publicidad</option>
                        <option value="7">Construccion</option>
                        <option value="8">Educativo</option>
                        <option value="9">Gastronomia</option>
                        <option value="10">Programacion</option>
                        <option value="11">Finanzas</option>
                        <option value="12">Otros</option>
                    </select>
                </div>

                <style>
                    select[disabled]{
                        all: unset;
                        color: transparent;
                    }
                </style>

                <h4>
                    Que educacion tuviste
                </h4>
                <textarea rows="10" cols="50" class="textarea"></textarea>
                <style>
                    .error{
                        border-color: #e74c3c;         
                    }
                    .correct{
                        border-color: #2ecc71;
                    }
                    .error_small{
                        color: #e74c3c;
                        font-size: 16px;
                        font-family: Arial, Helvetica, bold;
                    }
                    .correct_small{
                        color: #2ecc71;
                        font-size: 16px;
                        font-family: Arial, Helvetica, bold;
                    }
                </style>
                
                <!------------------------------------------------>

                <p id="thirdP">&nbsp;</p>
                

                <style>
                    textarea{
                        resize: none;
                        border: solid #ccc 2px;
                        transition: 0.5s;
                    }
                    textarea:focus{
                        border: solid #555 2px;
                        display: block;
                        outline: none;
                    }
                    button{
                        margin-bottom: 40px;
                        transition: 0.5s;
                    }
                    button:hover{
                        transform: scale(1.2);
                    }
                </style>


                <h4>
                    Cuentanos sobre ti:
                </h4>
                <textarea rows="10" cols="50" class="textarea"></textarea>

                <h4>
                    Cual es tu Experencia Laboral:
                </h4>
                <textarea rows="10" cols="50" class="textarea"></textarea>
                
                
                <style>
                    button{
                        width: 100%;
                        margin-top: 5px;
                        border: none;
                        border-bottom: solid #ccc 2px;
                        margin-top: 20px;
                        font-size: 30px;
                        border: none;
                        cursor: pointer;
                        border-radius: 20px;
                        background-color: rgb(47, 255, 71);
                        color: white;
                        transition: 0.5s;
                    }
                </style>

                
                
                <script>
                    const form = document.getElementById('form');
                    const username = document.getElementById('username');
                    const phone = document.getElementById('phone');
                    const city = document.getElementById('city');

                    form.addEventListener('submit', e => {
                        e.preventDefault();
                        
                        checkInputs();
                    });
                    
                    function checkInputs(){
                        const usernameValue = username.value.trim();
                        const phoneValue = phone.value.trim();
                        const cityValue = city.value.trim();

                        if (usernameValue === '') {
                            setErrorFor(username, 'No coloco su nombre');
                        }else{
                            setCorrectFor(username, 'Correcto');
                        }

                        if (phoneValue === '') {
                            setErrorFor(phone, 'No coloco su telefono');
                        }else{
                            setCorrectFor(phone, 'Correcto');
                        }

                        if (cityValue == '') {
                            setErrorFor(city, 'No coloco su Ciudad');
                        }else{
                            setCorrectFor(city, 'Correcto');
                        }
                    };


                    function setErrorFor(input, message) {
                        const formControl = input.parentElement;
                        const small = formControl.querySelector('small');
                        formControl.className = 'form-control error';
                        input.className = 'error';
                        small.className = 'error_small'
                        small.innerText = message;
                    }

                    function setCorrectFor(input, message) {
                        const formControl = input.parentElement;
                        const small = formControl.querySelector('small');
                        formControl.className = 'form-control error';
                        input.className = 'correct';
                        small.className = 'correct_small'
                        small.innerText = message;
                    }
                </script>
                <button >Try it</button>
            </form>
        </div>
        <script src='\work\plugins\sweetalert2.all.min.js'></script>
        <script src="js/sweetalert2@11.js"></script>
        
    </body>
</html>

