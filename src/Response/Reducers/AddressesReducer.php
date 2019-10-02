<?php

declare(strict_types=1);

namespace App\Response\Reducers;

use App\User;
use Psr\Http\Message\StreamInterface;

final class AddressesReducer implements Reducer
{
    public function __invoke(User $user, StreamInterface $data): User
    {
        return $user;
    }
}
