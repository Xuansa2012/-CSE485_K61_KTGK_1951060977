<?php 
$conn = mysqli_connect('localhost', 'root','','blood','3306');
  mysqli_set_charset($conn,"utf8");//Định dang font chữ 

  if(!$conn){
    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
  }
  $id="";
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
  $sql = "select * from blood_donor where bd_id='".$id."'";
  $result = mysqli_query($conn,$sql);
  $bd_name=$bd_age=$bd_bgroup=$bd_reg_date=$bd_phone=$bd_sex="";
  while($row = mysqli_fetch_assoc($result)){
    $bd_name=$row['bd_name'];
    $bd_age=$row['bd_age'];
    $bd_bgroup=$row['bd_bgroup'];
    $bd_reg_date=$row['bd_reg_date'];
    $bd_phone=$row['bd_phone'];
    $bd_sex=$row['bd_sex'];
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="icon/css/all.css">
    <style type="text/css">
      form{margin-top: 100px;}

}
    </style>
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image" style="width: 500px;height: 500px;margin-top: 30px;">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1" style="margin-top: 50px;">
        
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Your Name</label>
            <p class="form-control form-control-lg" style="border: 0px;"><?php echo $bd_name;?></p>
            
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Your Sex</label>
            <p class="form-control form-control-lg" style="border: 0px;"><?php echo $bd_sex;?></p>
            
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Your Age</label>
            <p class="form-control form-control-lg" style="border: 0px;"><?php echo $bd_age;?></p>
            
          </div>
           <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Your Bgroup</label>
            <p class="form-control form-control-lg" style="border: 0px;"><?php echo $bd_bgroup;?></p>
            
          </div>
           <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Your reg_Date</label>
            <p class="form-control form-control-lg" style="border: 0px;"><?php echo $bd_reg_date;?></p>
            
          </div>


          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Your Phone</label>
            <p class="form-control form-control-lg" style="border: 0px;"><?php echo $bd_phone;?></p>
            
          </div>

      
          <!-- Submit button -->
         <a href="index.php"> <button type="button" style="margin-top: 10px;margin-top: 10px;" class="btn btn-secondary btn-lg btn-block">Trở về</button></a>

        

         

      </div>
    </div>
  </div>
</section>
</body>
</html>