<?php

namespace App\Resources;

use App\GraphQL\Models\Post as GraphQLPost;
use App\Models\Post as EloquentPost;
use Illuminate\Support\Collection;

final readonly class PostCollection
{
    public function toGraphQL(Collection $collection): Collection
    {
        return $collection->map(function (EloquentPost $post): GraphQLPost {
            $resource = new Post();
            return $resource->toGraphQL($post);
        });
    }
}
