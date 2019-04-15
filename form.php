<?php 

  if(isset($_GET['user-name'])) {
    echo "GET获取的名字：".$_GET['user-name'];
  };

  if(isset($_POST['user-name'])) {
    echo "POST获取的名字：".$_POST['user-name'];
  }

?>