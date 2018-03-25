<?php
    include_once(__DIR__ .'/../Controllers/StudentController.php');
    $cStudent = new studentController();
    $cStudent->editStudent();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sua thong tin</title>
</head>
<body>
    
    <form action="#" method="POST">
        New name: <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
</body>
</html>