<?php 
	include_once('../Controllers/StudentController.php');
	$list=new StudentController();
	$resurt=$list->getListStudent();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List student</title>
</head>
<body>
	<a href="createStudent.php">Create a student</a>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Status</th>
		</tr>
		<?php foreach($resurt as $ld) { ?>
		<tr>
			<td><?php echo $ld['studentId']?></td>
			<td><?php echo $ld['studentName']?></td>
			<td><?php echo $ld['studentStatus']?></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>