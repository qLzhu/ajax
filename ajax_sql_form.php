<?php 
  # 连接数据库
  $conn = mysqli_connect("localhost:8889","root","root","ajaxtest");
  if(isset($_POST['name'])) {
    # 将拿到的数据转化一下
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $query = "INSERT INTO users(name) VALUES('$name')";
    if(mysqli_query($conn, $query)) {
      echo "用户添加成功";
    } else {
      echo "用户添加失败".mysqli_error($conn);
    }
  }
?>