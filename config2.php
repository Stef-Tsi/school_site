<?php 
	class DbConnect {
		private $host = 'localhost';
		private $dbName = 'dropdown';
		private $user = 'root';
		private $pass = '';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
 ?>

<!--####### Heb een tutoriol op youtube gevonden en die overgenamen en paar dingen verandered wist niet echt hoe ik het om moest zetten zodat me andere config file kon gebruiken daarom heb ik er nu 2 ( hoop dat het niet erg is)  -->
