<?php

namespace App\services;

use App\repositories\ContactFormRepository;

class ContactFormService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ContactFormRepository;
    }

    public function store($contactform)
    {
        $this->repository->create($contactform);
    }

    public function validate($contactform)
    {
        // Validate the inputs
        $name = trim($contactform->getName());
        $email = trim($contactform->getEmail());
        $subject = trim($contactform->getSubject());
        $message = trim($contactform->getMessage());

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            // Return an error message if any of the inputs is empty
            return 'All fields are required';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Return an error message if the email is not valid
            return 'Invalid email address';
        }

        // Sanitize the inputs
        $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_SPECIAL_CHARS);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS);

        return true;
    }
}
