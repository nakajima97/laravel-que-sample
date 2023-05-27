<?php

namespace App\Services;

use App\Models\Comment;
use App\Jobs\StoreComment;

class CommentService
{
  public function store($author_name, $body)
  {
    StoreComment::dispatch($author_name, $body);
  }

  public function getAll()
  {
    return Comment::all()->sortBy("created_at");
  }
}


