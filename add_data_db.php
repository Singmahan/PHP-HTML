<?php include('connectdb.php');

    $m_name = $_POST['m_name'];
    $m_lastname = $_POST['m_lastname'];

    $sql = "INSERT INTO member (m_name, m_lastname) VALUES ('$m_name','$m_lastname')";
    $result = mysqli_query($dbcon, $sql);

    if($result){
      echo "<script>";
      echo "alert('เพิ่มข้อมูลสำเร็จ');";
      echo "window.location = 'show_data.php'";
      echo "</script>";
    }else {
      echo "<script>";
      echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
      echo "window.location = 'show_data.php'";
      echo "</script>";
    }

 ?>
