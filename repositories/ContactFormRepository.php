<?php

use App\config\database;

class ContactFormRepository
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function create(array $formData)
    {
        // Validate the inputs
        $name = trim($formData['name']);
        $email = trim($formData['email']);
        $subject = trim($formData['subject']);
        $message = trim($formData['message']);

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


        // Prepare the SQL query
        $query = "INSERT INTO contact_forms (name, email, subject, message) VALUES (?, ?, ?, ?)";

        // Prepare the statement
        $stmt = $this->database->pdo->prepare($query);

        // Bind the form data to the placeholders in the query
        $stmt->bindValue(1, $name, PDO::PARAM_STR);
        $stmt->bindValue(2, $email, PDO::PARAM_STR);
        $stmt->bindValue(3, $subject, PDO::PARAM_STR);
        $stmt->bindValue(4, $message, PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();

        // Return a success message
        return 'Message sent successfully';
    }
}
