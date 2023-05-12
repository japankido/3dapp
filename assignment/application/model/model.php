<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;

	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/3d.db';

		// Then create a connection to a database with the PDO() function
		try {
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE references (id INTEGER PRIMARY KEY, name TEXT, url Text)");
			return "references table is successfully created inside 3d.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO references (id, name, url) VALUES (1, 'X3DOM', 'https://www.x3dom.org/'); " .
			"INSERT INTO references (id, name, url) VALUES (2, 'Bootstrap', 'https://getbootstrap.com/'); " .
			"INSERT INTO references (id, name, url) VALUES (3, 'Slim Framework', 'https://www.slimframework.com/'); " .
			"INSERT INTO references (id, name, url) VALUES (4, 'jQuery', 'https://jquery.com/'); " .
			"INSERT INTO references (id, name, url) VALUES (5, 'Blender', 'https://www.blender.org/'); " .
			"INSERT INTO references (id, name, url) VALUES (6, 'HTML5', 'https://www.w3schools.com/html/'); " .
			"INSERT INTO references (id, name, url) VALUES (7, 'JavaScript', 'https://www.w3schools.com/js/'); ");
			return "references model data inserted successfully inside 3d.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM `references`';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['id'] = $data['id']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[$i]['name'] = $data['name'];
				$result[$i]['url'] = $data['url'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
}
?>
