# Telemon

A simple PHP wrapper for the Telegram Bot API, providing object-oriented access to Telegram responses with autocomplete support in IDEs.

## Installation

```bash
composer require MehdiHamid32/telemon
```

## Usage

```php
<?php

use Telemon\Telemon;

require_once __DIR__ . '/vendor/autoload.php';

try {
    $telemon = Telemon::create('YOUR_BOT_TOKEN');

    $message = $telemon->sendMessage([
        'chat_id' => 123,
        'text' => 'Hello, world!'
    ]);

    if ($message->ok()) {
        echo "Message ID: " . $message->result()->messageId();
    } else {
        echo "Error: " . $message->description();
    }
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}
```

## Features

✅ Easy-to-use OOP wrapper for Telegram Bot API
✅ IDE autocomplete support for Telegram objects (Message, User, Chat, etc.)
✅ Error handling with exceptions
✅ Supports all Telegram Bot API methods

## License

MIT License © 2025 Mehdi Hamid
