<?php

namespace App\Controllers;

use Framework\Controller;

class UserController extends Controller
{
     public function index($userId)
     {
          //        echo ($name.' '.$value);
          return $this->view('index.php', ['userId' => $userId]);
     }

}