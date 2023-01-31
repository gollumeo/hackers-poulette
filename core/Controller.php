<?php

namespace App\Core;

class Controller
{
    public function viewHome($view)
    {
//        extract($data);
        require_once(__ROOT__ . '/views/contactform/' . $view . '.php');
    }
}
