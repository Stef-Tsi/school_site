<?php
    require 'config2.php';
    if(isset($_POST['aid'])) {
        $db = new DbConnect;
		$conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM students WHERE klas_id = " . $_POST['aid']);
		$stmt->execute();
		$books = $stmt->fetchAll(PDO::FETCH_OBJ);
		echo json_encode($books);
    }

	function loadAuthors() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM lokaal ");
		$stmt->execute();
		$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $students;
	}

 ?>