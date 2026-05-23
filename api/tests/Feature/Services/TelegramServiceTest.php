<?php

declare(strict_types=1);

use Ermeson\BlogApi\Config\AppConfig;
use Ermeson\BlogApi\DataObject\TelegramSendMessage;
use Ermeson\BlogApi\Services\TelegramService;
use GuzzleHttp\Client as HttpClient;

test('sendMessage uses correct payload in request', function () {
    $httpClient = Mockery::mock(HttpClient::class);
    $httpClient->shouldReceive('post')
        ->once()
        ->with(Mockery::any(), [
            'json' => [
                'chat_id' => '1234',
                'text' => 'Sample text',
                'parse_mode' => 'HTML'
            ]
        ]);

    $appConfig = new AppConfig();
    $telegramService = new TelegramService(
        $appConfig,
        $httpClient
    );

    $telegramService->sendMessage(new TelegramSendMessage(
        '1234',
        'Sample text',
        'HTML'
    ));
});
