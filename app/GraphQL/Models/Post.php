<?php

declare(strict_types=1);

namespace App\GraphQL\Models;

final readonly class Post
{
    public function __construct(
        public int $id,
        public int $userId,
        public string $title,
        public string $content,
    )
    {
    }
}
