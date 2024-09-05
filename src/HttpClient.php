<?php

namespace ShockMedia\Generated;

interface HttpClient
{
    public function apiCall(string $method, array $params): mixed;
}

class SimpleHttpClient implements HttpClient
{
    public function __construct
    (
        private readonly string $apiUrl,
        private readonly string $authorization,
        private int $id = 1,
    ) {
    }

    protected function post(string $requestBody, array $headers): string
    {
        $opts = array(
            'http' =>
            array(
                'method'  => 'POST',
                'header'  => $headers,
                'content' => $requestBody
            )
        );

        $context = stream_context_create($opts);

        $result = file_get_contents($this->apiUrl, false, $context);
        if ($result === false) {
            throw new \Exception('API call failed.');
        }
        return $result;
    }

    public function apiCall(string $method, array $params): mixed
    {
        $id = $this->id++;

        $requestBody = json_encode([
            'method' => $method,
            'params' => $params,
            'id' => $id,
            'jsonrpc' => '2.0'
        ]);

        $headers = [
            'Content-Type: application/json; charset=utf-8',
            'Authorization: ' . $this->authorization
        ];

        $result = $this->post($requestBody, $headers);
        $decoded = json_decode($result, true);
        if (array_key_exists('result', $decoded)) {
            return $decoded['result'];
        }
        if (array_key_exists('error', $decoded)) {
            $code = $decoded['error']['code'];
            $message = $decoded['error']['message'];
            $errorMessage = 'Error ' . $code . ': ' . $message;
            if (array_key_exists('data', $decoded['error'])) {
                $data = print_r($decoded['error']['data'], true);
                $errorMessage .= "\n" . $data;
            }
            throw new \Exception($errorMessage);
        }
        throw new \Exception("Unknown return value:\n" . $result);
    }
}
