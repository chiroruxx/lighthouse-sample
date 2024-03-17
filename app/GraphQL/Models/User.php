<?php

declare(strict_types=1);

namespace App\GraphQL\Models;

final readonly class User
{
    public function __construct(
        public int    $id,
        public string $name,
        public string $email,
    )
    {
    }
}
