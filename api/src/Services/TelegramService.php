<?php

declare(strict_types=1);

namespace Ermeson\BlogApi\Services;

use Ermeson\BlogApi\Config\AppConfig;
use Ermeson\BlogApi\DataObject\TelegramSendMessage;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\RequestOptions;

final class TelegramService
{
    public function __construct(
        private readonly AppConfig $appConfig,
        private readonly HttpClient $client
    )
    {
    }

    public function sendMessage(TelegramSendMessage $message): void
    {
        $payload = $message->toArray();

        $this->client->post("{$this->appConfig->telegramBaseUrl}/sendMessage", [
            RequestOptions::JSON => $payload
        ]);
    }
}
