<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{
  public function store($author_name, $body)
  {
    // 時間かかる処理にしたいので3秒待ってからDBに保存するようにする
    sleep(3);

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


