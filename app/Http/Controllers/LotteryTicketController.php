<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotteryTicketController extends Controller
{
    public function index()
    {
        return view('layouts.show');
    }

    /**
     * GET
     * /books/search-process
     * Process the form to search for a book
     */
    public function searchProcess()
    {
        return "Hola";
    }

}


