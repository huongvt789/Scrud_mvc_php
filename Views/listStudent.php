<?php 
	include_once(__DIR__ .'/../Controllers/StudentController.php');
	include_once(__DIR__.'/../Config/connect.php');
	$list=new StudentController();
	$conn=new database();
	$resurt=$list->getListStudent();
	$kq= $conn->database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List student</title>
</head>
<body>
	<a href="">Create a student</a>
	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php
		$query="SELECT * FROM student";
		$result=mysqli_query($kq, $query) ;
		if($result!=false){
		if(mysqli_num_rows($result)>0){
			while ($ld=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
 		?>
		<tr>
			<td><?php echo $ld['studentId']?></td>
			<td><?php echo $ld['studentName']?></td>
			<td><?php echo $ld['studentStatus']?></td>
            <td><a href="editStudent.php?id=<?=$name['studentId']?>">Edit |</a>
            </td>
        </tr>	
            </table>
    </body>
</html>

		</tr>
		<?php }
		}
	}
	?>
	</table>
</body>
</html>