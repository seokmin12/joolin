<?php
	include '../lib/mysql_conn.php';

	$id = $_GET["userid"];
	$sql = "SELECT * FROM user_info WHERE id = '$id'";
	echo $sql;
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    
	if($count==0) {
		echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
	?>
	<div style='font-family:"malgun gothic";text-align: center;font-size:25px;'><?php echo $id; ?>는 사용가능한 아이디입니다.</div>
	<button value="닫기" onclick="window.close()" style="margin-left: 860px;margin-top: 14px">닫기</button>
<?php 
	}else{
?>
	<?php
		echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
	?>
	<div style='font-family:"malgun gothic";color:red;text-align: center;font-size:25px;'><?php echo $id; ?>중복된아이디입니다.<div>
	<button value="닫기" onclick="window.close()" style="margin-top: 14px">닫기</button>
<?php
	}
?>
