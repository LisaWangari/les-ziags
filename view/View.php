<?php

/**
 * Created by PhpStorm.
 * User: evan_suau
 */
class View
{
    // File associated to view
    private $file;
    // View title
    private $title;

    public function __construct($action)
    {
        // File name depending on $action
        $this->file = $action . ".php";
    }

    // Generate and display view
    public function generate($data)
    {
        // Generate specific part of the view
        $content = $this->generate_file($this->file, $data);
        // Generate common parts
        $view = $this->generate_file('view/gabarit.php', array('title' => $this->title, 'content' => $content));
        // Send view to browser
        echo $view;
    }

    // Generate a view file and return result
    private function generate_file($file, $data)
    {
        if (file_exists($file))
        {
            // Access $data elements in the view
            extract($data);
            // Starts exit timeout
            ob_start();
            // Include view file
            require "$file";
            // Stops timeout and returns ob_get_clean
            return ob_get_clean();
        }
        else
        {
            throw new Exception("Cannot find '$file'.");
        }
    }
}