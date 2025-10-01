<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

use Closure;
use Mantle\Contracts\Support\Arrayable;
use Mantle\Http_Client\Http_Method;
use Mantle\Http_Client\Request;
use Mantle\Testing\Mock_Http_Response;
use Mantle\Testing\Mock_Http_Sequence;

/**
 * Fake a remote HTTP request.
 *
 * @template TCallableReturn of Mock_Http_Sequence|Mock_Http_Response|Arrayable|null
 *
 * @param  (callable(string|Request, ?array<mixed>): TCallableReturn)|Mock_Http_Response|string|array<string, Mock_Http_Response|callable>  $url_or_callback  URL to fake, array of URL and response pairs, or a closure
 *                                                                                                                                                     that will return a faked response.
 * @param  Mock_Http_Response|array<mixed>|callable  $response  Optional response object, defaults to a 200 response with no body.
 * @param  Http_Method|string|null  $method  Optional request method to apply to, defaults to all. Does not apply to array of URL and response pairs OR callbacks.
 */
function fakeRequest(
    Mock_Http_Response|callable|string|array|null $url_or_callback = null,
    Mock_Http_Response|array|callable|null $response = null,
    Http_Method|string|null $method = null
): ?Mock_Http_Response {
    return test()->fake_request($url_or_callback, $response, $method);
}

/**
 * Prevent any stray HTTP requests.
 *
 * @param  Mock_Http_Response|Closure|bool  $response  Optional response or boolean to enable/disable. Defaults to true, which will return a 500 response for any stray requests.
 */
function preventStrayRequests(Mock_Http_Response|Closure|bool $response = true): void
{
    test()->prevent_stray_requests($response);
}

/**
 * Allow stray HTTP requests.
 */
function allowStrayRequests(): void
{
    test()->allow_stray_requests();
}
