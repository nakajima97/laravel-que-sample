<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BoardController extends Controller
{
    public function index()
    {
        $commentService = app()->make('commentService');

        $comments = $commentService->getAll();

        return view('board', compact('comments'));
    }
}
