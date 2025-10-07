<?php

use Mantle\Http_Client\Pending_Request;
use Mantle\Testing\Exceptions\Stray_Request_Exception;

use function Pest\PestPluginWordPress\fakeRequest;
use function Pest\PestPluginWordPress\preventStrayRequests;

it('should fake a remote request', function () {
    preventStrayRequests();

    fakeRequest('https://example.com')->with_json(['foo' => 'bar']);

    $request = Pending_Request::create()->get('https://example.com');

    $this->assertEquals('bar', $request->json('foo'));
});

it('should throw an error for a stray request', function () {
    preventStrayRequests();

    $this->expectException(Stray_Request_Exception::class);

    Pending_Request::create()->get('https://stray-request.com');
});
