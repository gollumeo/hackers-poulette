<?php

class ContactFormRepository
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function create(array $formData)
    {
        // Prepare the SQL query
        $query = "INSERT INTO contact_forms (name, email, message) VALUES (?, ?, ?)";

        // Prepare the statement
        $stmt = $this->database->pdo->prepare($query);

        // Bind the form data to the placeholders in the query
        $stmt->bindValue(1, $formData['name'], PDO::PARAM_STR);
        $stmt->bindValue(2, $formData['email'], PDO::PARAM_STR);
        $stmt->bindValue(3, $formData['message'], PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();
    }
}
