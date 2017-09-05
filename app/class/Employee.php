<?php

class Employee extends Person{
    public $company;
    
    public function setCompany($company){
        $this->company = $company;
    }
    
    public function getCompany(){
        return $this->company;
    }
    
    public function work(){
        echo "Working";
    }
}
