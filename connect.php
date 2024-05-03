<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', 'benyahya123sql', 'news_space') or die("Connection failed:" .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $query = mysqli_query($conn, $sql);
            if($query){
                echo 
                "
                <script> alert('Data added successfult!'); </script>
                ";
            }else{
                echo "Error";
            }
        }
    }
?>