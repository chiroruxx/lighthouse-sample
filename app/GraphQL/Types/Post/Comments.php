<?php

declare(strict_types=1);

namespace App\GraphQL\Types\Post;

use App\GraphQL\Models\Post;
use App\Services\PostService;
use Illuminate\Support\Collection;

final readonly class Comments
{
    public function __construct(private PostService $service)
    {
    }

    public function __invoke(Post $post): Collection
    {
        return $this->service->getComments($post);
    }
}
