<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentsController
 * 
 * Automatically generated via CLI.
 */
class StudentsController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->model('StudentsModel');
        $this->call->database();
    }

    public function test()
    {
        if($this->db)
        {
            echo "Database connection established successfully.";
        }
    }

    public function get_all()
    {
        var_dump( $this->StudentsModel->all());
    }

    public function create()
    {
        $this->StudentsModel->insert([
            'first_name' => 'maemae',
            'last_name' => 'maranan',   
            'email' => 'jelayyy@gmail.com'
        ]);
        echo "Inserted";
    }

    public function update()
    {
        $this->StudentsModel->update(1,[
            'first_name' => 'gela',
            'last_name' => 'maranan',   
            'email' => 'jelayyy@gmail.com'
        ]);
        echo "Updated";
    }

    public function delete()
    {
        $this->StudentsModel->delete(1);
        echo "Deleted";
    }

}