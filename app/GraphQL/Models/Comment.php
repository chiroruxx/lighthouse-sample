<?php

declare(strict_types=1);

namespace App\GraphQL\Models;

final readonly class Comment
{
    public function __construct(
        public int    $id,
        public string $title,
        public string $content,
    )
    {
    }
}
