<?php
    if(isset($_POST['Firstname'])){
        $conn = mysqli_connect('localhost','root','MYSQLROOT','persons_info');
        if(!$conn){
            die('connection failed : '.mysqli_connect_error());
        }
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $age = $_POST['Age'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $username = $_POST['Username'];
        $pwd = $_POST['Password'];

        $sql = "INSERT INTO `students_info` (`FirstName`, `LastName`, `Age`, `Emai`, `Phone`, `Username`, `Password`) VALUES ('$firstname', '$lastname', '$age', '$email', '$phone', '$username', '$pwd');";

        if($conn->query($sql) == true){
            echo "Sign-Up Details Successfully Inserted";
        }
        else{
                echo "Error: $sql <br> $connect->error";
        }
        
        $conn->close();
    }
 ?>