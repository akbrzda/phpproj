<?php

namespace App\Controllers;

use Framework\Controller;

class SearchController extends Controller
{
     public function index($query)
     {
          //        echo ($name.' '.$value);
          return $this->view('index.php', ['query' => $query]);
     }

}