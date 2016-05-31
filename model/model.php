<?php

/**
 * Created by PhpStorm.
 * User: evan_suau
 */
abstract class Model
{
    // PDO object to access database
    private $db;

    protected function execute_request($sql, $parameters = null)
    {
        if ($parameters == null)
        {
            $result = $this->get_db()->query($sql);    // direct execution
        }
        else
        {
            $result = $this->get_db()->prepare($sql);  // prepared request
            $result->execute($parameters);
        }
        return $result;
    }

    // Return connection object to database
    // Init connection if needed
    public function get_db()
    {
        if ($this->db == null)
        {
            // Create connection
            $this->db = new PDO('mysql:host=localhost;dbname=lesziagsdb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->db;
    }
}