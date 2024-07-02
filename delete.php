<?php

include 'connect.php';

// รับ ID จาก GET request
$id = $_GET['id'];

// เตรียมคำสั่ง SQL สำหรับลบข้อมูล
$sql = "DELETE FROM users WHERE id='$id'";

// ประมวลผลคำสั่ง SQL
if ($conn->query($sql) === TRUE) {
  // แสดงข้อความแจ้งว่าลบข้อมูลเรียบร้อยแล้ว
  echo "ลบข้อมูลเรียบร้อยแล้ว";
} else {
  // แสดงข้อความแจ้งว่าเกิดข้อผิดพลาด
  echo "เกิดข้อผิดพลาด: " . $conn->error;
}

// ปิดการเชื่อมต่อ
$conn->close();

?>
