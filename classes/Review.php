<?php

class Review {
    private $id;
    private $message;
    private $author;
    private $tourOperatorId;

    public function __construct($data) {

        $this->id = $data['id'];
        $this->message = $data['message'];
        $this->author = $data['author'];
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
}

?>