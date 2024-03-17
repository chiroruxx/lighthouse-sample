<?php

declare(strict_types=1);

namespace App\Resources;

use App\GraphQL\Models\Comment as GraphQLComment;
use App\Models\Comment as EloquentComment;

final readonly class Comment
{
    public function toGraphQL(EloquentComment $comment): GraphQLComment
    {
        return new GraphQLComment(
            $comment->id,
            $comment->title,
            $comment->content,
        );
    }
}
