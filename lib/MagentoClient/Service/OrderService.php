<?php

namespace MagentoClient\Service;

use Itav\Component\Serializer\Serializer;
use MagentoClient\Model\Order\OrderModel;
use MagentoClient\Model\ParamsModel;

/**
 * Class CustomerService
 * @package MagentoClient\Service
 */
class OrderService implements ServiceInterface
{
    /**
     * @var Service
     */
    private $service;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * OrderService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @param integer $idOrder
     * @return OrderModel|false
     */
    public function get($idOrder)
    {
        $params = new ParamsModel();
        $params->setResource('orders/' . $idOrder . '/');

        $customer = $this->service
            ->setParams($params)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request();

        if ($customer)
            return $this->serializer->denormalize($customer, OrderModel::class);

        return false;
    }

    /**
     * @param ParamsModel $searchModel
     * @return OrderModel[]|bool
     */
    public function search(ParamsModel $searchModel)
    {
        $searchModel->setResource('orders');

        $customer = $this->service
            ->setParams($searchModel)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request();

        if ($customer) {
            return $this->serializer->denormalize($customer, OrderModel::class . '[]');
        }
        return false;
    }
}