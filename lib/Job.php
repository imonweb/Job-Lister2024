<?php 

class Job {
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Get all Jobs
  public function getAllJobs()
  {
    /*
    $this->db->query("SELECT jobs.*, categories.name AS cname 
						FROM jobs 
						INNER JOIN categories
						ON jobs.category_id = categories.id 
						ORDER BY post_date DESC 
						");
          // Assign result set 
          $results = $this->db->resultSet();
    */
     $this->db->query("SELECT * FROM jobs ORDER BY id");
          // Assign result set 
          $results = $this->db->resultSet();

          return $results;
  }
} // class Job