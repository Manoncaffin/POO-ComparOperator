<?php

class User {
    private $id;
    private $author;
    private $password;

    public function __construct($data) {

        if (isset($data['id'])){
            $this->id = $data['id'];
        }
        $this->author = $data['author'];
        $this->password = $data['password'];
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

}


?>