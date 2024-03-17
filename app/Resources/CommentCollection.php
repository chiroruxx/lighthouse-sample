<?php

declare(strict_types=1);

namespace App\Resources;

use App\GraphQL\Models\Comment as GraphQLComment;
use App\Models\Comment as EloquentComment;
use Illuminate\Support\Collection;

final readonly class CommentCollection
{
    public function toGraphQL(Collection $collection): Collection
    {
        return $collection->map(function (EloquentComment $comment): GraphQLComment {
            $resource = new Comment();
            return $resource->toGraphQL($comment);
        });
    }
}
