<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;

class passwordChecker extends TestCase
{   
    public function test1():void {
        $mdp = new verif("password1234");
        $result = $mdp->verifPwd();
        $this ->assertTrue($result);
    }

        


}