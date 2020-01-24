<?php

class User
{

    public $firstName;
    public $surname;
    public $email;
    public $mailer;

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function getFullName()
    {
        //return $this->firstName . ' ' . $this->surname;
        return "$this->firstName $this->surname";
    }

    public function notify($message)
    {
        $mailer = new Mailer();
        return $mailer->sendMessage($this->email, $message);
    }

    public function notifyMailer($message)
    {
        return $this->mailer->sendMessage($this->email, $message);
    }
}