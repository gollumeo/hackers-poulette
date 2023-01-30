<?php

class ContactFormRepository
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function save(ContactForm $contactForm)
    {
        $conn = $this->db->connect();
        $stmt = $conn->prepare('INSERT INTO contact_forms (name, email, subject, message) VALUES (:name, :email, :subject, :message)');
        $stmt->bindParam(':name', $contactForm->getName());
        $stmt->bindParam(':email', $contactForm->getEmail());
        $stmt->bindParam(':subject', $contactForm->getSubject());
        $stmt->bindParam(':message', $contactForm->getMessage());

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAll()
    {
        $conn = $this->db->connect();
        $stmt = $conn->prepare('SELECT * FROM contact_forms');
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
