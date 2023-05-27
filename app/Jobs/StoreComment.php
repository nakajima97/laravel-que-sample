<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Comment;

class StoreComment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $author_name;
    protected $body;

    /**
     * Create a new job instance.
     */
    public function __construct($author_name, $body)
    {
        $this->author_name = $author_name;
        $this->body = $body;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // 時間かかる処理にしたいので3秒待ってからDBに保存するようにする
        sleep(3);

        Comment::create([
        "author_name" => $this->author_name,
        "body" => $this->body
        ]);
    }
}
