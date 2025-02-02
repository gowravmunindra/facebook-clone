<?php
    if(isset($_POST['Username'])){
    
        $connect = mysqli_connect('localhost','root','MYSQLROOT','persons_info');
        if(!$connect){
            die('connection failed : '.mysqli_connect_error());
        }

        $name = $_POST['Username'] ;
        $pwd = $_POST['Password'] ;

        $sql = "INSERT INTO `details` (`Username`, `Password`) VALUES ('$name', '$pwd');";
        if($connect->query($sql) == true){
            // echo "Login Details Successfully Inserted";
        }
        else{
            // echo "Error: $sql <br> $connect->error";
        }

        $connect->close();
    }
?>
