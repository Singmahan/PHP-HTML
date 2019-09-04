<?php  include('connectdb.php');

    $m_id = $_GET['m_id'];

    $sql = "DELETE FROM member WHERE m_id='$m_id'";
    $result = mysqli_query($dbcon, $sql);

    if($result){
      echo "<script>";
      echo "alert('ลบข้อมูลสำเร็จ');";
      echo "window.location = 'show_data.php'";
      echo "</script>";
    }else {
      echo "<script>";
      echo "alert('ลบข้อมูลไม่สำเร็จ');";
      echo "window.location = 'show_data.php'";
      echo "</script>";
    }
?>
