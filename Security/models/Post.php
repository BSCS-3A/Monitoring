<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'student';

    // Post Properties
    public $student_id;
    public $fname;
    public $Mname;
    public $lname;
    public $grade_level;
    public $voting_status;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * FROM student';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
  }
?>
