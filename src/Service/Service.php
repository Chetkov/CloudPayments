<?php

namespace Chetkov\CloudPayments\Service;

use Chetkov\CloudPayments\Config;
use Chetkov\CloudPayments\Model\Model;
use Chetkov\CloudPayments\Response\Response;

/**
 * Class Service
 * @package Chetkov\CloudPayments\Service
 */
class Service
{
    public const ACTION_URL = '/';

    /**
     * @var array
     */
    protected static $instances = [];

    /**
     * @var Config
     */
    protected $config;

    /**
     * Service constructor.
     *
     * @param \Chetkov\CloudPayments\Config $config
     */
    private function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param Config $config
     *
     * @return static
     */
    public static function getInstance(Config $config)
    {
        $key = static::class;
        if (empty(self::$instances[$key])) {
            self::$instances[$key] = new static($config);
        }
        return self::$instances[$key];
    }

    /**
     * @param array $parameters
     *
     * @return Response
     * @throws \Exception
     */
    protected function execute(array $parameters): Response
    {
        $headers = [
            'Authorization: Basic ' . base64_encode(
                $this->config->getUserName() . ':' . $this->config->getPassword()
            ),
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->config->getApiUrl() . static::ACTION_URL,
            CURLOPT_HEADER => 0,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
        ]);
        if (!empty($parameters)) {
            curl_setopt_array($ch, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($parameters),
            ]);
        }
        $response = curl_exec($ch);
        curl_close($ch);

        if (!$response) {
            throw new \Exception('CURL Card error');
        }

        $response = json_decode($response, true);

        $result = new Response($response['Success']);
        if (isset($response['Message'])) {
            $result->setMessage($response['Message']);
        }
        if (isset($response['Model'])) {
            $model = new Model($response['Model']);
            $result->setModel($model);
        }

        return $result;
    }
}
