<?php include('connectdb.php');

    $sql = "SELECT * FROM member";
    $result = mysqli_query($dbcon, $sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>แสดงข้อมูล</h1>
    <hr>
    <a href="add_data.php">เพิ่มข้อมูล</a>
    <table border="1">
      <tr>
        <th>ลำดับที่</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>แก้ไขข้อมูล</th>
        <th>ลบข้อมูล</th>
      </tr>
      <?php
      $intnum = 1; while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
      <tr>
        <td><?php echo $intnum; ?></td>
        <td><?php echo $row['m_name'] ?></td>
        <td><?php echo $row['m_lastname'] ?></td>

        <td><a href="edit_data.php?m_id=<?php echo $row['m_id']; ?>">แก้ไขข้อมูล</a></td>

        <td><a href="delete_data.php?m_id=<?php echo $row['m_id']; ?>" onclick="return confirm('ต้องการลบข้อมูลจริงหรือ ? ');">ลบข้อมูล</a></td>
      </tr>
      <?php $intnum++; }  ?>
    </table>
  </body>
</html>
