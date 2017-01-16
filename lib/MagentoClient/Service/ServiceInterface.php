<?php

namespace MagentoClient\Service;

use Itav\Component\Serializer\Serializer;

/**
 * Interface ServiceInterface
 * @package MagentoClient\Service
 */
interface ServiceInterface
{
    /**
     * ServiceInterface constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    function __construct(Service $service, Serializer $serializer);
}