<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

use Mantle\Testing\Pending_Testable_Request;
use Mantle\Testing\Test_Response;

/**
 * Add a header to be sent with the request.
 *
 * @param  string  $name  header name (key)
 * @param  string  $value  header value
 */
function withHeader(string $name, string $value): Pending_Testable_Request
{
    return test()->with_header($name, $value);
}

/**
 * Set the referer header and previous URL session value in order to simulate
 * a previous request.
 *
 * @param  string  $url  URL for the referer header
 */
function from(string $url): Pending_Testable_Request
{
    return test()->with_header('referer', $url);
}

/**
 * Visit the given URI with a GET request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, string>  $headers  request Headers to load
 */
function get(mixed $uri, array $headers = []): Test_Response
{
    return test()->get($uri, $headers);
}
