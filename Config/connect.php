<?php
	class database{
		var $conn = '';
		function database(){
			$this->conn = mysqli_connect("mysql", "root", "root", "thuctapPHP");
			return $this->conn;
		}
	}
?>