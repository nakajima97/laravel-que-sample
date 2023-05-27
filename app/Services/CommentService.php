<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{
  public function store($author_name, $body)
  {
    Comment::create([
      "author_name" => $author_name,
      "body" => $body
    ]);
  }

  public function getAll()
  {
    return Comment::all()->sortBy("created_at");
  }
}


