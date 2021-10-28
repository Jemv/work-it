

<?php 
	include('C:\xampp\htdocs\work\database\db_connect\db.php');
	session_start();
	$id = $_SESSION['id'];

	$s = "select * from cuenta where id = '$id'";
	$result = mysqli_query($conex, $s);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		$sql = "select * from cuenta where id='$id'";
        $result = $conex->query($sql);

        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                $email_user = $row['email'];
            	$name_user = $row['name'];
                $phone_user = $row['phone'];
                $city_user = $row['city'];
                $sobre_el_user = $row['sobre_el'];
                $exp_labolral_user = $row['exp_labolral'];
                $lvl_education_user = $row['lvl_education'];
                $estudios_user = $row['estudios'];
                $complete_register_user = $row['complete_register'];
                $edad_user = $row['edad'];
            }
        }
	}else{
		header('location:/work');
	}


 ?>