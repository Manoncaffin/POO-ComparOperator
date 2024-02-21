<?php

class Manager {
    
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllDestination()
    {
        // return $this->getAllDestination;
        $result = $this->db->query("SELECT * FROM destination");
        return $result->fetchAll();
    }

    public function getDestinationById($id){
        var_dump($id);
        $result = $this->db->prepare("SELECT * FROM destination WHERE id = :id");
        $result -> execute([
            ":id" => $id,
        ]);
        return $result->fetch();
    }
    
    public function getOperatorById($id){

        $result = $this->db->prepare("SELECT * FROM tour_operator WHERE id = :id");
        $result -> execute([
            ":id" => $id,
        ]);
        return $result->fetch();
    }


    public function getOperatorByDestination()
    {
        // return $this->getOperatorByDestination;
        $result = $this->db->query("SELECT * FROM tour_operator");
        return $result->fetchAll();
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
    {// return $this->getAllOperator;
        $result = $this->db->query("SELECT * FROM tour_operator WHERE id IN (SELECT tour_operator_id FROM destination)");
        return $result->fetchAll();
        
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
}
