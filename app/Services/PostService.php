<?php

declare(strict_types=1);

namespace App\Services;

use App\GraphQL\Models\Post;
use App\Models\Comment;
use App\Resources\CommentCollection;
use Illuminate\Support\Collection;

final readonly class PostService
{
    public function __construct(
        private CommentCollection $resourceCommentCollection,
    )
    {
    }

    public function getComments(Post $post): Collection
    {
        $comments = Comment::where('post_id', $post->id)->get();
        return $this->resourceCommentCollection->toGraphQL($comments);
    }
}
