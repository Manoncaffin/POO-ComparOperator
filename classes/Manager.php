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
