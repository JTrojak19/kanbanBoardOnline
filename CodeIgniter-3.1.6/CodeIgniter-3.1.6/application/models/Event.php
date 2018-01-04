<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.01.2018
 * Time: 15:04
 */

class EventModel extends CI_Model
{
    public $name;
    public $estimatedTime;
    public $realTime;
    public $date;

    public function __construct()
    {
        parent::__construct();
    }
    public function insertEntry()
    {
        $this->name = $_POST['name'];
        $this->estimatedTime = $_POST['estimatedTime'];
        $this->realTime = $_POST['realTime'];
        $this->date = time();

    }

}