<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\ContactForm;
use App\services\ContactFormService;

class ContactFormController extends Controller
{
    protected $contactFormService;

    public function __construct()
    {
        $this->contactFormService = new ContactFormService;
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $contactForm = new ContactForm($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);

            if ($this->contactFormService->validate($contactForm)) {
                $this->contactFormService->store($contactForm);

                // redirect to a success page
                return $this->viewHome('success');
            }
        }
        return false;
    }
}
