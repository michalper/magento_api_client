<?php

namespace MagentoClient\Service;

use Itav\Component\Serializer\Serializer;
use MagentoClient\Model\Customer\CustomerModel;
use MagentoClient\Model\ParamsModel;

/**
 * Class CustomerService
 * @package MagentoClient\Service
 */
class CustomerService implements ServiceInterface
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
     * CustomerService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @param integer $idCustomer
     * @return CustomerModel|false
     */
    public function get($idCustomer)
    {
        $params = new ParamsModel();
        $params->setResource('customers/' . $idCustomer . '/');

        $customer = $this->service
            ->setParams($params)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request();

        if ($customer)
            return $this->serializer->denormalize($customer, CustomerModel::class);

        return false;
    }

    /**
     * @param ParamsModel $searchModel
     * @return CustomerModel[]|bool
     */
    public function search(ParamsModel $searchModel)
    {
        $searchModel->setResource('customers');

        $customer = $this->service
            ->setParams($searchModel)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request();

        if ($customer) {
            return $this->serializer->denormalize($customer, CustomerModel::class . '[]');
        }
        return false;
    }
}