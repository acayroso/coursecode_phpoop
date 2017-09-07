<?php

class UserTest extends \PHPUnit_Framework_TestCase{
    
    public function testGetName(){
        $user = new \App\Models\User;
        
        $user->setFirstName('Adrian');
        
        $this->assertEquals($user->getFirstName(),'Adrian');
    }
    
}
