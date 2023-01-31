<?php
namespace App\Models;

class ContactForm
{
    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}
