<?php 
$conn = mysqli_connect('localhost', 'root','','blood','3306');
  mysqli_set_charset($conn,"utf8");//Định dang font chữ 

  if(!$conn){
    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
  }
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
  $sql="delete from blood_donor where bd_id='".$id."'";
  mysqli_query($conn,$sql);
  header('location:index.php');
?>