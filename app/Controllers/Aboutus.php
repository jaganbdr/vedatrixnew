<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Aboutus extends BaseController
{
    public function index()
    {
        return view("templates/about");
    }
}
