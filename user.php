<?php

class User
{
    protected $id;
    public $user;
    public $name;
    public $surname;

    public function __construct($user, $name, $surname, $id=null)
    {
        $this->id = $id;
        $this->user = $user;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getNameAndSurname()
    {
        return "$this->name $this->surname";
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setData($user, $name, $surname)
    {
        $this->user = $user;
        $this->name = $name;
        $this->surname = $surname;
    }
}
