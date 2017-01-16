<?php

use MagentoClient\Service\Service;
use MagentoClient\Service\CustomerService;
use MagentoClient\Service\OrderService;
use MagentoClient\Service\ResourceService;
use Itav\Component\Serializer\Serializer;

/**
 * Class MagentoClient
 */
class MagentoClient
{
    /**
     * @var CustomerService
     */
    public $customers;

    /**
     * @var OrderService
     */
    public $orders;

    /**
     * @var Service
     */
    public $service;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * MagentoClient constructor.
     */
    public function __construct()
    {
        $this->service = new Service();
        $this->serializer = new Serializer();
        $this->customers = new CustomerService($this->service, $this->serializer);
        $this->orders = new OrderService($this->service, $this->serializer);
    }

    /**
     * @param string $url
     * @return MagentoClient
     */
    public function setUrl($url)
    {
        $this->service->setUrl($url);
        return $this;
    }

    /**
     * @param string $customerKey
     * @return MagentoClient
     */
    public function setCustomerKey($customerKey)
    {
        $this->service->setCustomerKey($customerKey);
        return $this;
    }

    /**
     * @param string $customerSecret
     * @return MagentoClient
     */
    public function setCustomerSecret($customerSecret)
    {
        $this->service->setCustomerSecret($customerSecret);
        return $this;
    }

    /**
     * @param string $oauthToken
     * @return MagentoClient
     */
    public function setOauthToken($oauthToken)
    {
        $this->service->setOauthToken($oauthToken);
        return $this;
    }

    /**
     * @param string $oauthSecret
     * @return MagentoClient
     */
    public function setOauthSecret($oauthSecret)
    {
        $this->service->setOauthSecret($oauthSecret);
        return $this;
    }
}