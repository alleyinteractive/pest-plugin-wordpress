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
 * Start a fluent request to the application.
 */
function request(): Pending_Testable_Request
{
    return test()->with_headers([]);
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

/**
 * Visit the given URI with a POST request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, mixed>  $data  request data
 * @param  array<string, string>  $headers  request Headers to load
 */
function post(mixed $uri, array $data = [], array $headers = []): Test_Response
{
    return test()->post($uri, $data, $headers);
}

/**
 * Visit the given URI with a PUT request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, mixed>  $data  request data
 * @param  array<string, string>  $headers  request Headers to load
 */
function put(mixed $uri, array $data = [], array $headers = []): Test_Response
{
    return test()->put($uri, $data, $headers);
}

/**
 * Visit the given URI with a PATCH request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, mixed>  $data  request data
 * @param  array<string, string>  $headers  request Headers to load
 */
function patch(mixed $uri, array $data = [], array $headers = []): Test_Response
{
    return test()->patch($uri, $data, $headers);
}

/**
 * Visit the given URI with a DELETE request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, mixed>  $data  request data
 * @param  array<string, string>  $headers  request Headers to load
 */
function delete(mixed $uri, array $data = [], array $headers = []): Test_Response
{
    return test()->delete($uri, $data, $headers);
}

/**
 * Visit the given URI with an OPTIONS request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, mixed>  $data  request data
 * @param  array<string, string>  $headers  request Headers to load
 */
function options(mixed $uri, array $data = [], array $headers = []): Test_Response
{
    return test()->options($uri, $data, $headers);
}

/**
 * Visit the given URI with a HEAD request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, string>  $headers  request Headers to load
 */
function head(mixed $uri, array $headers = []): Test_Response
{
    return test()->head($uri, $headers);
}

/**
 * Create a post and visit its permalink with a GET request.
 *
 * @param  mixed  $uri  request URI
 * @param  array<string, mixed>  $data  request data
 * @param  array<string, string>  $headers  request Headers to load
 */
function fetchPost(array $arguments = []): Test_Response
{
    return test()->get(factory()->post->create_and_get($arguments));
}
