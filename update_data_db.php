<?php include('connectdb.php');

    $m_id = $_POST['m_id'];
    $m_name = $_POST['m_name'];
    $m_lastname = $_POST['m_lastname'];

    $sql = "UPDATE member SET m_name='$m_name', m_lastname='$m_lastname' WHERE m_id='$m_id'";
    $result = mysqli_query($dbcon, $sql);

    if($result){
      echo "<script>";
      echo "alert('แก้ไขข้อมูลสำเร็จ');";
      echo "window.location = 'show_data.php'";
      echo "</script>";
    }else {
      echo "<script>";
      echo "alert('แก้ไขข้อมูลไม่สำเร็จ');";
      echo "window.location = 'show_data.php'";
      echo "</script>";
    }

?>
