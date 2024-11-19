<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "abc";

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $query = "SELECT * FROM def";

    $connect = $conn->query($query);


    if(isset($_POST['btn'])){

        $id = $_POST['email'];
        $psw = $_POST['pswd'];

        if($connect && mysqli_num_rows($connect) > 0){
            while($data = mysqli_fetch_assoc($connect)){
                if ($id == $data["user_id"] && $psw == $data["pass"]){
                    header('location:home_admin.php');
                } else {
                    header('location:test.php');
                }
            }
        }
    }

    if(isset($_POST['e_btn'])){

        $e_id = $_POST['e_email'];
        $e_psw = $_POST['e_pswd'];

        $r_query = "INSERT INTO def(user_id, pass) VALUES ('$e_id','$e_psw')";

        $q_run = mysqli_query($conn, $r_query);

        header('location:test.php');
    }

?>