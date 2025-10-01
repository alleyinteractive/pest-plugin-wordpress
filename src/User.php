<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

use Mantle\Database\Model\User;
use WP_User;

/**
 * Set the currently authenticated user for the application.
 *
 * @param  User|WP_User|string|int|null  $user  The user to authenticate as. Can be a User model, WP_User object, user ID, or user login. If null, will log out the current user.
 * @return User|WP_User The authenticated user instance.
 */
function actingAs(User|WP_User|string|int|null $user): User|WP_User
{
    return test()->acting_as($user);
}

/**
 * Assert that the current user is authenticated.
 *
 * @param  User|WP_User|string|int|null|mixed  $user  User to check, optional.
 */
function assertAuthenticated(mixed $user = null): void
{
    test()->assertAuthenticated($user);
}

/**
 * Assert that the current user is not authenticated.
 */
function assertNotAuthenticated(): void
{
    test()->assertNotAuthenticated();
}
