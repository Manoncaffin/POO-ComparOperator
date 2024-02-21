<?php

class AdminManager {

    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function createDestination(Destination $destination)
    {
        $request = $this->db->prepare('INSERT INTO destination (location, price, tourOperatorId)
        VALUES (:location, :price, :tourOperatorId)');
        $request->execute([
            'location' => $destination->getLocation(),
            'price' => $destination->getPrice(),
            'tourOperatorId' => $destination->getTourOperatorId(),
        ]);
    }

    public function createTourOperator(TourOperator $tourOperator)
    {
        $request = $this->db->prepare('INSERT INTO tour_operator (name, link, gradeCount, gradeTotal, isPremium)
        VALUES (:name, :link, :gradeCount, :gradeTotal, :isPremium)');
        $request->execute([
            'name' => $tourOperator->getName(),
            'link' => $tourOperator->getLink(),
            'gradeCount' => $tourOperator->getGradeCount(),
            'gradeTotal' => $tourOperator->getGradeTotal(),
            'isPremium' => $tourOperator->getIsPremium(),
        ]);
    }

    public function updateOperatorToPremium(TourOperator $tourOperator)
    {
        $request = $this->db->prepare("UPDATE tour_operator SET isPremium = 1 WHERE id = :id");
        $request->execute([
            'id' => $tourOperator->getId(),
        ]);
    }
}


?>