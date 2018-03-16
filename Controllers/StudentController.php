<?php 
	include_once('../Config/connect.php');
	include_once('../Models/Student.php');
// Controller điều khiển dữ liệu từ model đổ ra view.
// (Nên gọi tới class-> truy cập tới hàm của Model).
	class StudentController{
		function getListStudent(){
			$list=new StudentModel();
			$resurt=$list->listStudent();
			return $resurt;
		}
	}
?>