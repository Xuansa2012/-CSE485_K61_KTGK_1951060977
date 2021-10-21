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
  $sql= "insert into blood_donor value('','".$bd_name."','".$bd_sex."','".$bd_age."','".$bd_bgroup."','".$bd_reg_date."','".$bd_phno."')";
  var_dump($sql);
   mysqli_query($conn,$sql);
  header('location:index.php');
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
</head>
<body>
  <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1" style="float: left">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">ADD </p>

                <form class="mx-1 mx-md-4" method="POST" action="">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Your Name</label>
                      <input type="text" name="bd_name" id="form3Example1c" class="form-control" />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Your Sex</label>
                      <input type="text"   name="bd_sex" id="form3Example3c" class="form-control" />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                       <label class="form-label" for="form3Example4c">Your Age</label>
                      <input type="text"  name="bd_age" id="form3Example4c" class="form-control" />
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Your Bgroup</label>
                      <input type="text"  name="bd_bgroup" id="form3Example4cd" class="form-control" />
                      
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Your reg_Date</label>
                      <input type="text"  name="bd_reg_date" id="form3Example4cd" class="form-control" />
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                       <label class="form-label" for="form3Example4c">Your Phone</label>
                      <input type="text"   name="bd_phno" id="form3Example4c" class="form-control" />
                     
                    </div>
                  </div>


                

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" style="margin-top: 10px;" class="btn btn-primary btn-lg">ADD</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2" style="margin-top: -450px;margin-left: 600px;">

                <img src="draw1.png" class="img-fluid" style="width: 500px;height: 400px;margin-top: 50px;">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>