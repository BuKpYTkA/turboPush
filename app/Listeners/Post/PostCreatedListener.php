<?php

namespace App\Listeners\Post;

use App\Events\Post\PostCreated;
use App\Models\Post\Post;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        $post = $event->post;
        $postSlug = str_slug($post->getTitle(), '-');
        $postSlug = $this->verifySlug($post, $postSlug);
        $post->setAlias($postSlug);
        $post->save();
    }

    /**
     * @param Post $post
     * @param string $slug
     * @return string
     */
    private function verifySlug(Post $post, string $slug)
    {
        $posts = Post::query()->where('alias', $slug)->get();
        if (!$posts->count()) {
            return $slug;
        }
        return $slug . $post->getId();
    }
}
