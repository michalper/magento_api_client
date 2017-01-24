<?php

namespace MagentoClient\Service;

use MagentoClient\Model\ParamsModel;

/**
 * Class Service
 * @package MagentoClient\Service
 */
class Service
{
    const REQUEST_METHOD_GET = 'GET';
    const REQUEST_METHOD_POST = 'POST';
    const REQUEST_METHOD_PUT = 'PUT';
    const REQUEST_METHOD_DELETE = 'DELETE';

    const API_PREFIX = '/api/rest/';

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $customerKey;

    /**
     * @var string
     */
    private $customerSecret;

    /**
     * @var string
     */
    private $oauthToken;

    /**
     * @var string
     */
    private $oauthSecret;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $resource;

    /**
     * @var ParamsModel
     */
    private $params;

    /**
     * @var array
     */
    private $headers = [
        'Content-Type' => 'application/json',
        'Accept' => '*/*'
    ];


    /**
     * @param string $url
     * @return Service
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string $customerKey
     * @return Service
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;
        return $this;
    }

    /**
     * @param string $customerSecret
     * @return Service
     */
    public function setCustomerSecret($customerSecret)
    {
        $this->customerSecret = $customerSecret;
        return $this;
    }

    /**
     * @param string $oauthToken
     * @return Service
     */
    public function setOauthToken($oauthToken)
    {
        $this->oauthToken = $oauthToken;
        return $this;
    }

    /**
     * @param string $oauthSecret
     * @return Service
     */
    public function setOauthSecret($oauthSecret)
    {
        $this->oauthSecret = $oauthSecret;
        return $this;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param string $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * @return ParamsModel
     */
    public function getParams()
    {

        return $this->params;
    }

    /**
     * @param ParamsModel $params
     * @return Service
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @param string $type
     * @return Service
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }



    /**
     * @return string
     * @throws \Exception
     */
    private function getUrl()
    {
        if (!$this->url) {
            throw new \Exception('Magento URL missing.', 404);
        }

        $this->url = rtrim($this->url, '/');
        $this->url .= self::API_PREFIX;

        return $this->url .  $this->getParams()->getParams();
    }


    /**
     * @return array
     * @throws \Exception
     */
    public function request()
    {
        if (!$this->customerKey)
            throw new \Exception('CustomerKey is missing.', 404);

        if (!$this->customerSecret)
            throw new \Exception('CustomerSecret is missing.', 404);

        if (!$this->oauthToken)
            throw new \Exception('oAuthToken is missing.', 404);

        if (!$this->oauthSecret)
            throw new \Exception('oAuthSecret is missing.', 404);

        $client = new \OAuth($this->customerKey, $this->customerSecret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_AUTHORIZATION);
        $client->enableDebug();
        $client->setToken($this->oauthToken, $this->oauthSecret);

        $client->fetch($this->getUrl(), [], OAUTH_HTTP_METHOD_GET, $this->getHeaders());
        return json_decode($client->getLastResponse(), true);
    }

    public static function dump($die, $variable, $desc = false, $noHtml = false)
    {
        if (is_string($variable)) {
            $variable = str_replace("<_new_line_>", "<BR>", $variable);
        }

        if ($noHtml) {
            echo "\n";
        } else {
            echo "<pre>";
        }

        if ($desc) {
            echo $desc . ": ";
        }

        print_r($variable);

        if ($noHtml) {
            echo "";
        } else {
            echo "</pre>";
        }

        if ($die) {
            die();
        }
    }

}