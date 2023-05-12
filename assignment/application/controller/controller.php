<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;

	// Create functions for the controller class
	function __construct($pageMethod = null)
	{
		// echo $pageURI;
		$this->load = new Load();
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageMethod();
	}

    function home()
	{
		$this->load->view('home');
	}

	function about() {
	    $this->load->view('about');
	}

    function drink() {
        $this->load->view('drink');
    }


	// Note the way that the Model class is written, such that the constructor in the Model
	// makes a conection to the database when the new Model class in instatiated the constructor above.
	// These three methods folling are only examples of what you could do to play aorund with storing and
	// accessing your data — you might show a deeper understanding by developing other CRUD (Create, Read, Update, and Delete) methods
	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}

	function apiGetReferenceData()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}

}
?>
