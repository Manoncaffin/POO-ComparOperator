<?php

class Manager {
    
    private $db;

    public function __construct($db) {
        $this->db = $db;
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

    public function getAllDestination()
    {
        // return $this->getAllDestination;
        $result = $this->db->query("SELECT * FROM destination");
        return $result->fetchAll();
    }

    public function getDestinationById($id){
        // var_dump($id);
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

    public function getReviewByOperatorId($id)

    {
        $result = $this->db->prepare("SELECT * FROM review JOIN user ON user.id = review.author_id WHERE tour_operator_id = :tour_operator_id");
        $result -> execute([
            ":tour_operator_id" => $id,
        ]);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAveragePriceByOperatorId($id) {
        $result = $this->db->prepare("SELECT *
        FROM destination
        JOIN tour_operator ON destination.tour_operator_id = tour_operator.id
        WHERE tour_operator.id = :id");
        $result -> execute([
            ":id" => $id,
        ]);
        $donnees = $result->fetch();
        // var_dump($donnees);
        return $donnees;
    }
    public function getAllOperator()
    {// return $this->getAllOperator;
        $result = $this->db->query("SELECT * FROM tour_operator WHERE id IN (SELECT tour_operator_id FROM destination)");
        return $result->fetchAll();
        
    }

    public function getUserById($id) {
        $result = $this->db->prepare("SELECT * FROM user WHERE id = :id");
        $result -> execute ([
            ":id" => $id,
        ]);
        $donnees = $result->fetch();
        return $donnees;
    }

}