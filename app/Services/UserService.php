<?php

declare(strict_types=1);

namespace App\Services;

use App\GraphQL\Models\User;
use App\Models\Post;
use App\Models\User as EloquentUser;
use App\Resources\PostCollection;
use App\Resources\User as ResourceUser;
use Illuminate\Support\Collection;

final readonly class UserService
{
    public function __construct(
        private ResourceUser $resourceUser,
        private PostCollection $resourcePostCollection,
    )
    {
    }

    public function findUser(int $id): User
    {
        $user = EloquentUser::findOrFail($id);
        return $this->resourceUser->toGraphQL($user);
    }

    public function getUserPosts(User $user): Collection
    {
        $posts = Post::where('user_id', $user->id)->get();
        return $this->resourcePostCollection->toGraphQL($posts);
    }
}
