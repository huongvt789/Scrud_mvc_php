<?php 
	include_once(__DIR__ .'/../Config/connect.php');
	include_once(__DIR__ .'/../Models/Student.php');
// Controller điều khiển dữ liệu từ model đổ ra view.
// (Nên gọi tới class-> truy cập tới hàm của Model).
	class StudentController{
		function getListStudent(){
			$list=new StudentModel();
			$resurt=$list->listStudent();
			return $resurt;
		}
		function addStudent()
		{
        	$mStudent = new studentModel();
			if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$name =  $mStudent->addStudent($name);
				header('location:listStudent.php');
			}
		}
		function editStudent(){
			$mStudent = new studentModel();
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$mStudent->editStudent($id,$name);
					header('location:listStudent.php');
				}
			}
		}
	}
?>