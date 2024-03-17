<?php

namespace App\Resources;

use App\GraphQL\Models\Post as GraphQLPost;
use App\Models\Post as EloquentPost;

final readonly class Post
{
    public function toGraphQL(EloquentPost $post): GraphQLPost
    {
        return new GraphQLPost(
            $post->id,
            $post->user_id,
            $post->title,
            $post->content,
        );
    }
}
