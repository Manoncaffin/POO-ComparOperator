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
        // $request = $this->db->prepare("UPDATE heroes SET health_point = :health_point WHERE id = :id");
        // $request->execute([
        //     'health_point' => $hero->getPoint(),
        //     'id' => $hero->getId(),
        // ]);
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
        $request = $this->db->prepare('INSERT INTO user (author, password)
        VALUES (:author, :password)');
        $request->execute([
            'author' => $author->getAuthor(),
            'password' => $author->getPassword(),
        ]);

        $id = $this->db->lastInsertId();
        $author->setId($id);
    }
}
