
<?php
    session_start();
    include('db_connect/db.php');
  


    $email = @$_POST['email'];
    $password = @$_POST['password'];    

    $s = "select * from cuenta where email='$email' && password='$password'";
    $result = mysqli_query($conex, $s);
    $num = mysqli_num_rows($result);
    
    if(isset($_POST['button'])){
        if($num==1){
            $sql = "select * from cuenta where email='$email' && password='$password'";
            $result = $conex->query($sql);

            if($result-> num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['id']=$row['id'];
                    header('location:home.php');
                }
            }else{
                
            }
        }else{
            echo "
                <script>
                    Swal.fire({
                        icon:'error',
                        title:'Error',
                        text:'Email o contraseña incorrectos'
                    });
                </script>
            ";
        }
    }

?>