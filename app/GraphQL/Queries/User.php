<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\GraphQL\Models\User as GraphQLUser;
use App\Services\UserService;

final readonly class User
{
    public function __construct(private UserService $service)
    {
    }

    /** @param  array{"id": string}  $args */
    public function __invoke(null $_, array $args): GraphQLUser
    {
        $id = (int)$args['id'] ?? 0;

        return $this->service->findUser($id);
    }
}
