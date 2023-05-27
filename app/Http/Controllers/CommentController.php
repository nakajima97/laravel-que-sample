<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentRequest;
use App\Services\CommentService;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $commentService = app()->make('commentService');

        $commentService->store($request->name, $request->comment);

        return redirect()->to('/');
    }
}
