<?php
namespace App\Core;

use App\Models\ContactForm;

class Controller
{
    protected $model;

    public function __construct(ContactForm $model)
    {
        $this->model = $model;
    }

    public function submit()
    {
        // Perform actions on the model
        // For example, insert the data into a database
        $name = $this->model->getName();
        $email = $this->model->getEmail();
        $message = $this->model->getMessage();

        // Insert data into database
        // ...

        // Return success message
        return "Contact form submitted successfully!";
    }
}
