<?php include('connectdb.php');

      $m_id = $_GET['m_id'];

      $sql = "SELECT * FROM member WHERE m_id='$m_id'";
      $result = mysqli_query($dbcon, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>แก้ไขข้อมูล</h1>
    <hr>
    <form class="" action="update_data_db.php" method="post">
      <label for="">ชื่อ : </label>
      <input type="text" name="m_name" value="<?php echo $row['m_name'] ?>" required>
      <label for="">นามสกุล : </label>
      <input type="text" name="m_lastname" value="<?php echo $row['m_lastname'] ?>" required>

      <input type="hidden" name="m_id" value="<?php echo $row['m_id'] ?>">
      <input type="submit" name="submit" value="บันทึก">
    </form>
  </body>
</html>
