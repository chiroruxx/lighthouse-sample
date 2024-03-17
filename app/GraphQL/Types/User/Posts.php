<?php declare(strict_types=1);

namespace App\GraphQL\Types\User;

use App\GraphQL\Models\User;
use App\Services\UserService;
use Illuminate\Support\Collection;

final readonly class Posts
{
    public function __construct(private UserService $userService)
    {
    }

    public function __invoke(User $user): Collection
    {
        return $this->userService->getUserPosts($user);
    }
}
