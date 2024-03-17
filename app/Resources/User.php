<?php

namespace App\Resources;

use App\GraphQL\Models\User as GraphQLUser;
use App\Models\User as EloquentUser;

final readonly class User
{
    public function toGraphQL(EloquentUser $user): GraphQLUser
    {
        return new GraphQLUser(
            $user->id,
            $user->name,
            $user->email,
        );
    }
}
