<?php

namespace Telemon\Models;

use Telemon\Models\Message\Chat;
use Telemon\Models\Message\User;

abstract class BaseModel
{
    protected array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function __call($name, $arguments)
    {
        $key = $this->camelToSnake($name);

        if (!array_key_exists($key, $this->data)) {
            return null;
        }

        $value = $this->data[$key];

        if (is_array($value)) {
            $class = $this->resolveClass($key);
            return new $class($value);
        }

        return $value;
    }

    protected function camelToSnake(string $input): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $input));
    }

    protected function resolveClass(string $key): string
    {
        if ($key === 'result') {
            if (isset($this->data['result']['message_id'])) {
                return Message::class;
            }
            if (isset($this->data['result']['is_bot'])) {
                return User::class;
            }
            if (isset($this->data['result']['type']) && isset($this->data['result']['title'])) {
                return Chat::class;
            }

            return BaseModel::class;
        }

        return BaseModel::class;
    }

    public function toJson(int $options = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE): string
    {
        return json_encode($this->data, $options);
    }
}
