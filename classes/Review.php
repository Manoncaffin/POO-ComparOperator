<?php

class Review {
    private $id;
    private $message;
    private $author;
    private $tourOperatorId;
    private $grade;

    public function __construct($data) {

        if (isset($data['id'])){
            $this->id = $data['id'];
        }
        $this->message = $data['message'];
        $this->author = $data['author'];
        $this->grade = $data['grade'];
        $this->tourOperatorId = $data['tour_operator_id'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTourOperatorId()
    {
        return $this->tourOperatorId;
    }

    public function getGrade() {
        return $this->grade;
    }
}

?>