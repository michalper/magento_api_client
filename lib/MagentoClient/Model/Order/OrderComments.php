<?php

namespace MagentoClient\Model\Order;

class OrderComments
{
    /**
     * @var boolean
     */
    private $is_customer_notified;

    /**
     * @var boolean
     */
    private $is_visible_on_front;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $created_at;
}