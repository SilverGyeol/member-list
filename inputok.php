<?php
include("./dbcon.php");

$num = $_POST["num"];
$name = $_POST["name"];
$major = $_POST["major"];
$addr = $_POST["addr"];

$sql = "INSERT INTO member (snum, sname, smajor, saddr)
VALUES ('$num' , '$name' , '$major' , '$addr')";

echo "<br>";

if (mysqli_query($conn, $sql)) {
  echo "데이터가 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<div>
<a href="./input.php">회원정보입력</a>
<a href="./list.php">회원 리스트</a>
</div>