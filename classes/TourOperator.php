<?php

 class TourOperator {
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium;

    public function __construct($data) {
        $this->name = $data['name'];
       $this->link = $data['link'];
       $this->gradeCount = $data['gradeCount'];
       $this->gradeTotal = $data['gradeTotal'];
       $this->isPremium = $data['isPremium'];
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getGradeCount()
    {
        return $this->gradeCount;
    }

    public function getGradeTotal()
    {
        return $this->gradeTotal;
    }

    // public function getGrade()
    // {
    //     return $this->getGrade;
    // }

    public function getIsPremium()
    {
        return $this->isPremium;
    }
 }
