<?php

class Manager {
    
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllDestination()
    {
        // return $this->getAllDestination;
    }

    public function getOperatorByDestination()
    {
        // return $this->getOperatorByDestination;
    }

    public function createReview()
    {
        // return $this->createReview;
    }

    public function getReviewByOperatorId()
    {
        // return $this->getReviewByOperatorId;
    }

    public function getAllOperator()
    {
        // return $this->getAllOperator;
    }

    public function updateOperatorToPremium()
    {
        // return $this ->updateOperatorToPremium;
    }

    public function createTourOperator()
    {
        // return $this->createTourOperator;
    }

    public function createDestination()
    {
        // return $this->createDestination;
    }

    public function add($author)
    {
        var_dump($_SESSION['author_id']);
        $request = $this->db->prepare('INSERT INTO user (author, password)
        VALUES (:author, :password)');
        $request->execute([
            'author' => $author->getAuthor(),
            'password' => $author->getPassword(),
        ]);

        $id = $this->db->lastInsertId();
        $author->setId($id);
        $_SESSION['author_id'] = $id;
    }
}
