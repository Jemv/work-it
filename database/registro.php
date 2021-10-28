


<?php
    include('db_connect/db.php');

    $birth = @$_POST['date'];
    $phone = @$_POST['phone'];
    $email = @$_POST['email'];
    $password = @$_POST['contra_1'];
    $password_2 = @$_POST['contra_2'];
    $tipo_cuenta=@$_POST['tipo_cuenta'];

    $s = "select * from cuenta where email='$email'";
    $result = mysqli_query($conex, $s);

    if(isset($_POST['button'])){
        if($email == ''){
            ?>
                <link rel='stylesheet' type='test/css' href='plugins/sweetalert2.min.css'>
                    <script>
                        Swal.fire({
                            icon:'error',
                            title:'Error',
                            text:'Ingrese un Email'
                        });
                    </script>
                <script src='\work\plugins\sweetalert2.all.min.js'></script>
            <?php

              
        }else{
            $num = mysqli_num_rows($result);

            if ($num == 1){
                $var1 = "El email: $email ya se encuentra registrado";
                echo "
                    <script>
                        Swal.fire({
                            icon:'error',
                            title:'Error',
                            text:'$var1'
                        });
                    </script>
                ";
            }else{
                if($password != $password_2){
                    $var2 = "Las contraseñas son distintas";
                    echo "
                        <script>
                            Swal.fire({
                                icon:'error',
                                title:'Error',
                                text:'$var2'
                            });
                        </script>
                    ";                
                }else{
                    if($birth == ''){
                        $var3 = "Coloque su cumpleaños";
                        echo "
                            <script>
                                Swal.fire({
                                    icon:'error',
                                    title:'Error',
                                    text:'$var3'
                                });
                            </script>
                        "; 
                    }else{
                        if($phone == null){
                            $var4 = "Ingrese su telefono";
                            echo "
                                <script>
                                    Swal.fire({
                                        icon:'error',
                                        title:'Error',
                                        text:'$var4'
                                    });
                                </script>
                            "; 
                        }else{
                            if ($tipo_cuenta == 0) {
                                $var5 = "No escojio su tipo de cuenta";
                                echo "
                                    <script>
                                        Swal.fire({
                                            icon:'error',
                                            title:'Error',
                                            text:'$var5'
                                        });
                                    </script>
                                "; 
                            }
                            else{
                                $reg = "insert into cuenta (email, password, phone, birthday, tipo_cuenta) values ('$email', '$password', '$phone', '$birth', '$tipo_cuenta')";
                                mysqli_query($conex, $reg);
                                echo "
                                    <script>
                                        Swal.fire({
                                            icon:'success',
                                            title:'Completado',
                                            text:'Registro completado con exito',
                                            button:{
                                                text:'Continuar'
                                            }
                                        }).then(function(){
                                            window.location='index.php';
                                        })
                                    </script>
                                ";
                            }
                        }                
                    }
                }
            }
        }
    }
    
?>

