<?php

Class Home extends Controller
{
    
    function index($a = "",$b = "",$c = ""){

        show($a);
        show($b);
        show($c);

        $this->view("home");

    }

}