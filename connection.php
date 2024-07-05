
  <?php
  
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "apurbo";
  
  $conn = mysqli_connect($hostname,$username,$password,$dbname);

  $data01_select_info = "SELECT * FROM apurbouser";

  $data01 = $conn->query($data01_select_info);
   
  if(isset($_POST['r_submit'])) {

    $r_id = $_POST['s_id'];
    $r_department = $_POST['s_department'];
    $r_name = $_POST['s_name'];
    $r_sex = $_POST['s_sex'];
    $r_age = $_POST['s_age'];
    $r_blood = $_POST['s_blood'];
    $r_donate = $_POST['s_donate'];
    $r_donate_date = $_POST['s_donate_date'];
    $r_city = $_POST['s_city'];
    $r_number = $_POST['s_number'];

    $r_query = "INSERT INTO apurbouser (u_id, u_department, u_name, u_sex, u_age, u_blood, u_donate, u_donate_date, u_city, u_number, u_password) VALUES ('$r_id', '$r_department', '$r_name', '$r_sex', '$r_age', '$r_blood', '$r_donate', '$r_donate_date', '$r_city', '$r_number', '#@1234a')";

    $query_run = mysqli_query($conn, $r_query);

    header('location: index.php');
    exit();
}
 
if(isset($_POST['l_submit'])) {
  $ck_id = $_POST['l_exampleInputEmail1'];
  $ck_pass = $_POST['l_exampleInputPassword1'];

  if($data01 && mysqli_num_rows($data01) > 0) {
      while($da01 = mysqli_fetch_assoc($data01)) {
          if ($da01["u_id"] == $ck_id && $da01["u_password"] == $ck_pass) {
              $id = $da01["u_id"];
              header('location: home.php?id='.$id);
              exit();
          }
      }
  }

  header('location: index.php');
  exit();
}

?>