<?php

namespace App\Controllers;

use App\Models\ContactForm;
use App\Services\ContactFormService;

class ContactFormController
{
    protected $contactFormService;

    public function __construct(ContactFormService $contactFormService)
    {
        $this->contactFormService = $contactFormService;
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'message' => $_POST['message']
            ];

            $contactForm = new ContactForm($data);

            if ($this->contactFormService->validate($contactForm)) {
                $this->contactFormService->store($contactForm);

                // redirect to a success page
                header('Location: /success');
                exit();
            }
        }

        // render the contact form view
        require __DIR__ . '/../views/contactform/create.php';
    }
}
