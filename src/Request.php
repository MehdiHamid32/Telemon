<?php

namespace Telemon;

use Exception;

class Request
{
    protected string $url;
    protected array $headers = [];
    protected mixed $body = null;
    protected bool $isPostRequest = false;

    private function __construct(string $url, bool $isPostRequest = false)
    {
        $this->isPostRequest = $isPostRequest;
        $this->url = $url;
    }

    public static function get(string $url): static
    {
        return (new static($url));
    }

    public static function post(string $url): static
    {
        return (new static($url, true));
    }

    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;

        return $this;
    }

    public function setBody(string|array|object $body): static
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @throws Exception
     */
    public function send(): bool|string
    {
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        if (!$this->isPostRequest) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        }

        if ($this->headers) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        }

        if ($this->body) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->body);
        }

        $response = curl_exec($ch);
        curl_close($ch);

        if ($response === false) {
            throw new Exception(curl_error($ch));
        }

        return $response;
    }
}