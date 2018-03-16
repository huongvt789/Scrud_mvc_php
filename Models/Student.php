<?php 
	include_once('../Config/connect.php');
	class StudentModel extends database{
		function listStudent(){
			$query="SELECT * FROM student";
			$result=mysqli_query($this->conn,$query);
			while($row=mysqli_fetch_assoc($result)){
				 $data[] = $row;
        	}
        	return $data;
		}
	}
?>