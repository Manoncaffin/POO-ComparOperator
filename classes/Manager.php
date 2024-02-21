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

    }

    public function createTourOperator()
    {
        // return $this->createTourOperator;
    }

    public function createDestination()
    {
        // return $this->createDestination;
    }

    public function addUser(User $author)
    {
        $request = $this->db->prepare('INSERT INTO user (author, password)
        VALUES (:author, :password)');
        $request->execute([
            'author' => $author->getAuthor(),
            'password' => $author->getPassword(),
        ]);

        $id = $this->db->lastInsertId();
     
        $_SESSION['user_id'] = $id;
    }

    public function findUserById(User $user)
    {
        $request = $this ->db->prepare('SELECT id, author FROM user WHERE id = :id');
        $request->execute([
            'id' => $user->getId(),
        ]);
    }
    
}
