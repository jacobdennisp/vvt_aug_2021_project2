<?php

    require_once "config.php";

    if($_POST['operation_type']=='register'){

        $sql = "INSERT INTO users(name,phone_no,email,password) VALUES (?,?,?,?)";
        if($statement=mysqli_prepare($connection,$sql)){
            mysqli_stmt_bind_param($statement,"ssss",$username,$phoneno,$emailid,$password);

            $username=$_POST['name'];
            $phoneno = $_POST['phone_no'];
            $emailid=$_POST['email'];
            $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
        }
        if(mysqli_stmt_execute($statement)){
            header("location:index.php");
        }else{
            echo "Oops SOmething went wrong";
        }
        mysqli_stmt_close($statement);

    }
    

?>