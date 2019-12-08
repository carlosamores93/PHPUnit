<?php

class User
{

    public $firstName;

    public $surname;

    public function getFullName()
    {
        //return $this->firstName . ' ' . $this->surname;
        return "$this->firstName $this->surname";
    }
}