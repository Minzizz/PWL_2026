<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($articleID)
    {
        return 'Halaman artikel dengan ID ' . $articleID;
    }
}
