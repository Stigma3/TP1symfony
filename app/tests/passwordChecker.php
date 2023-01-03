<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;
use App\Src\Test;

class passwordChecker extends TestCase
{   
    public function test1() {
        $mdp = new verif("password1234");
        $result = $mdp->verifPwd();
        $this ->assertTrue($result);
    }

}