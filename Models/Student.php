<?php 
	include_once(__DIR__ .'/../Config/connect.php');
	class StudentModel extends database {
		function listStudent(){
			// $sql = "SELECT * FROM student WHERE studentStatus=1";
			// $result = mysqli_query($this->conn,$sql);
		}
		function addStudent($name){
			$sql = "INSERT INTO `student`(`studentName`) VALUES('$name')";
			mysqli_query($this->conn,$sql);
		}
		function editStudent($id,$name){
			$sql = "UPDATE `student` SET `studentName`='$name' WHERE `studentId`=$id";
			return mysqli_query($this->conn,$sql);
		}
	}
?>