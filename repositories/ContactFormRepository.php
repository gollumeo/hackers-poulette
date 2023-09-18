<?php
namespace App\repositories;
//use App\config\database;
//use App\core\Database;

use App\core\Database;
use App\Models\ContactForm;
use PDO;
use PDOException;

class ContactFormRepository
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getInstance()->getConnection();
    }

    public function create(ContactForm $formData)
    {
        // Prepare the SQL query
        $query = "INSERT INTO contact_forms (name, email, subject, message) VALUES (?, ?, ?, ?)";

        // Prepare the statement
        $stmt = $this->database->prepare($query);

        // Bind the form data to the placeholders in the query
        $stmt->bindValue(1, $formData->getName(), PDO::PARAM_STR);
        $stmt->bindValue(2, $formData->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(3, $formData->getSubject(), PDO::PARAM_STR);
        $stmt->bindValue(4, $formData->getMessage(), PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();

        // Return a success message
        return 'Message sent successfully';
    }
}
