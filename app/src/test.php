<?php

namespace App\src;

class  verif
{
    private String $mdp;
    private int $long;
    public function __construct(String $mdp){

        $this->mdp=$mdp;
        $this->long=10;
    }

    public function verifPwd( String $pwd){

        if(strlen($this->$mdp) >$this->long){

            return true;
        }
        else(){

            return false;
        }
    }


}
