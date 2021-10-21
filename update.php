<?php
$conn = mysqli_connect('localhost', 'root','','blood','3306');
  mysqli_set_charset($conn,"utf8");//Định dang font chữ 

  if(!$conn){
    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
  }
  $bd_name=$bd_age=$bd_bgroup=$bd_reg_date=$bd_phno=$bd_sex="";
  if(isset($_POST['bd_name'])){
    $bd_name=$_POST['bd_name'];
  }
  if(isset($_POST['bd_sex'])){
    $bd_sex=$_POST['bd_sex'];
  }
  if(isset($_POST['bd_age'])){
    $bd_age=$_POST['bd_age'];
  }
  if(isset($_POST['bd_bgroup'])){
    $bd_bgroup=$_POST['bd_bgroup'];
  }
  if(isset($_POST['bd_reg_date'])){
    $bd_reg_date=$_POST['bd_reg_date'];
  }
  if(isset($_POST['bd_phno'])){
    $bd_phno=$_POST['bd_phno'];
  }
  if($bd_name!="" && $bd_age!="" && $bd_bgroup!="" && $bd_reg_date!="" && $bd_phno!="" && $bd_sex!=""){
    $sql="update blood_donor set bd_name='".$bd_name."',bd_sex='".$bd_sex."', bd_age='".$bd_age."',bd_bgroup='".$bd_bgroup."',bd_reg_date='".$bd_reg_date."',bd_phone='".$bd_phno."'";
    mysqli_query($conn,$sql);
    var_dump($sql);
     header('location:index.php');
    }
?>