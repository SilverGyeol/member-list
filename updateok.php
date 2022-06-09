<?php
    include("./dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정</title>
</head>
<body>
<?php
$no = $_POST["no"];
$num = $_POST["num"];
$name = $_POST["name"];
$major = $_POST["major"];
$addr = $_POST["addr"];

$sql = "UPDATE member SET sname='$name', snum='$num', smajor='$major', saddr='$addr' WHERE sno='$no'";

if (mysqli_query($conn, $sql)) {
  echo "정보가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div>
<a href="./input.php">회원입력</a> 
<a href="./list.php">회원목록</a>
</div>
</body>
</html>