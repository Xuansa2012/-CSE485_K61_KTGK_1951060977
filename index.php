<?php
$conn = mysqli_connect('localhost', 'root','','blood','3306');
  mysqli_set_charset($conn,"utf8");//Định dang font chữ 

  if(!$conn){
    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
  }
  $sql="select * from blood_donor";
  $result = mysqli_query($conn,$sql);
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  
   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container mt-3">
  <h2>Hiển thị Danh sách</h2>
  <button class="btn btn-info"><a href="add.php">Add</a></button>   
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>STT</th>
        <th>Họ và Tên</th>
        <th>Giới tính</th>
        <th>Tuổi</th>
        <th>Nhóm Máu</th>
        <th>Ngày đăng kí</th>
        <th>Số điện thoại</th>
        <th>Chi tiết</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <?php 
      $id=1;
      while($row = mysqli_fetch_assoc($result)){?>
    <tbody>
     
      <td><?php echo $id++?></td>
      <td><?php echo $row['bd_name']?></td>
      <td><?php echo $row['bd_sex']?></td>
      <td><?php echo $row['bd_age']?></td>
      <td><?php echo $row['bd_bgroup']?></td>
      <td><?php echo $row['bd_reg_date']?></td>
      <td><?php echo $row['bd_phone']?></td>
      <td><a href="chitiet.php?id=<?php echo $row['bd_id']; ?>"><i class="fas fa-eye"></i></a></td>
      <td><a href="change.php?id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i> </a></td>
      <td><a href="delete.php?id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i> </a></td>
    
    </tbody>
    <?php }?>
  </table>
</div>

</body>
</html>
