<?php

namespace MagentoClient\Model\Order;

use MagentoClient\Model\Customer\AddressModel;

/**
 * Class OrderModel
 */
class OrderModel
{

    /**
     * @var integer
     */
    private $entity_id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $coupon_code;

    /**
     * @var string
     */
    private $shipping_description;

    /**
     * @var string
     */
    private $customer_id;

    /**
     * @var float
     */
    private $base_discount_amount;

    /**
     * @var float
     */
    private $base_grand_total;

    /**
     * @var float
     */
    private $base_shipping_amount;

    /**
     * @var float
     */
    private $base_shipping_tax_amount;

    /**
     * @var float
     */
    private $base_subtotal;

    /**
     * @var float
     */
    private $base_tax_amount;

    /**
     * @var float
     */
    private $base_total_paid;

    /**
     * @var float
     */
    private $base_total_refunded;

    /**
     * @var float
     */
    private $discount_amount;

    /**
     * @var float
     */
    private $grand_total;

    /**
     * @var float
     */
    private $shipping_amount;

    /**
     * @var float
     */
    private $shipping_tax_amount;

    /**
     * @var float
     */
    private $store_to_order_rate;

    /**
     * @var float
     */
    private $subtotal;

    /**
     * @var float
     */
    private $tax_amount;

    /**
     * @var float
     */
    private $total_paid;

    /**
     * @var float
     */
    private $total_refunded;

    /**
     * @var float
     */
    private $base_shipping_discount_amount;

    /**
     * @var float
     */
    private $base_subtotal_incl_tax;

    /**
     * @var float
     */
    private $base_total_due;

    /**
     * @var float
     */
    private $shipping_discount_amount;

    /**
     * @var float
     */
    private $subtotal_incl_tax;

    /**
     * @var float
     */
    private $total_due;

    /**
     * @var integer
     */
    private $increment_id;

    /**
     * @var string
     */
    private $base_currency_code;

    /**
     * @var string
     */
    private $discount_description;

    /**
     * @var string
     */
    private $remote_ip;

    /**
     * @var string
     */
    private $store_currency_code;

    /**
     * @var string
     */
    private $store_name;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var float
     */
    private $shipping_incl_tax;

    /**
     * @var float
     */
    private $base_customer_balance_amount;

    /**
     * @var float
     */
    private $customer_balance_amount;

    /**
     * @var string
     */
    private $payment_method;

    /**
     * @var string
     */
    private $gift_message_from;

    /**
     * @var string
     */
    private $gift_message_to;

    /**
     * @var string
     */
    private $gift_message_body;

    /**
     * @var string
     */
    private $tax_name;

    /**
     * @var float
     */
    private $tax_rate;

    /**
     * @var AddressModel[]
     */
    private $addresses;

    /**
     * @var OrderItems[]
     */
    private $order_items;

    /**
     * @var OrderComments[]
     */
    private $order_comments;

    /**
     * @return int
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * @param int $entity_id
     * @return OrderModel
     */
    public function setEntityId($entity_id)
    {
        $this->entity_id = $entity_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return OrderModel
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouponCode()
    {
        return $this->coupon_code;
    }

    /**
     * @param string $coupon_code
     * @return OrderModel
     */
    public function setCouponCode($coupon_code)
    {
        $this->coupon_code = $coupon_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDescription()
    {
        return $this->shipping_description;
    }

    /**
     * @param string $shipping_description
     * @return OrderModel
     */
    public function setShippingDescription($shipping_description)
    {
        $this->shipping_description = $shipping_description;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param string $customer_id
     * @return OrderModel
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseDiscountAmount()
    {
        return $this->base_discount_amount;
    }

    /**
     * @param float $base_discount_amount
     * @return OrderModel
     */
    public function setBaseDiscountAmount($base_discount_amount)
    {
        $this->base_discount_amount = $base_discount_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseGrandTotal()
    {
        return $this->base_grand_total;
    }

    /**
     * @param float $base_grand_total
     * @return OrderModel
     */
    public function setBaseGrandTotal($base_grand_total)
    {
        $this->base_grand_total = $base_grand_total;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseShippingAmount()
    {
        return $this->base_shipping_amount;
    }

    /**
     * @param float $base_shipping_amount
     * @return OrderModel
     */
    public function setBaseShippingAmount($base_shipping_amount)
    {
        $this->base_shipping_amount = $base_shipping_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseShippingTaxAmount()
    {
        return $this->base_shipping_tax_amount;
    }

    /**
     * @param float $base_shipping_tax_amount
     * @return OrderModel
     */
    public function setBaseShippingTaxAmount($base_shipping_tax_amount)
    {
        $this->base_shipping_tax_amount = $base_shipping_tax_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseSubtotal()
    {
        return $this->base_subtotal;
    }

    /**
     * @param float $base_subtotal
     * @return OrderModel
     */
    public function setBaseSubtotal($base_subtotal)
    {
        $this->base_subtotal = $base_subtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseTaxAmount()
    {
        return $this->base_tax_amount;
    }

    /**
     * @param float $base_tax_amount
     * @return OrderModel
     */
    public function setBaseTaxAmount($base_tax_amount)
    {
        $this->base_tax_amount = $base_tax_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseTotalPaid()
    {
        return $this->base_total_paid;
    }

    /**
     * @param float $base_total_paid
     * @return OrderModel
     */
    public function setBaseTotalPaid($base_total_paid)
    {
        $this->base_total_paid = $base_total_paid;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseTotalRefunded()
    {
        return $this->base_total_refunded;
    }

    /**
     * @param float $base_total_refunded
     * @return OrderModel
     */
    public function setBaseTotalRefunded($base_total_refunded)
    {
        $this->base_total_refunded = $base_total_refunded;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * @param float $discount_amount
     * @return OrderModel
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->discount_amount = $discount_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrandTotal()
    {
        return $this->grand_total;
    }

    /**
     * @param float $grand_total
     * @return OrderModel
     */
    public function setGrandTotal($grand_total)
    {
        $this->grand_total = $grand_total;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param float $shipping_amount
     * @return OrderModel
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingTaxAmount()
    {
        return $this->shipping_tax_amount;
    }

    /**
     * @param float $shipping_tax_amount
     * @return OrderModel
     */
    public function setShippingTaxAmount($shipping_tax_amount)
    {
        $this->shipping_tax_amount = $shipping_tax_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getStoreToOrderRate()
    {
        return $this->store_to_order_rate;
    }

    /**
     * @param float $store_to_order_rate
     * @return OrderModel
     */
    public function setStoreToOrderRate($store_to_order_rate)
    {
        $this->store_to_order_rate = $store_to_order_rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param float $subtotal
     * @return OrderModel
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * @param float $tax_amount
     * @return OrderModel
     */
    public function setTaxAmount($tax_amount)
    {
        $this->tax_amount = $tax_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaid()
    {
        return $this->total_paid;
    }

    /**
     * @param float $total_paid
     * @return OrderModel
     */
    public function setTotalPaid($total_paid)
    {
        $this->total_paid = $total_paid;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRefunded()
    {
        return $this->total_refunded;
    }

    /**
     * @param float $total_refunded
     * @return OrderModel
     */
    public function setTotalRefunded($total_refunded)
    {
        $this->total_refunded = $total_refunded;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseShippingDiscountAmount()
    {
        return $this->base_shipping_discount_amount;
    }

    /**
     * @param float $base_shipping_discount_amount
     * @return OrderModel
     */
    public function setBaseShippingDiscountAmount($base_shipping_discount_amount)
    {
        $this->base_shipping_discount_amount = $base_shipping_discount_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseSubtotalInclTax()
    {
        return $this->base_subtotal_incl_tax;
    }

    /**
     * @param float $base_subtotal_incl_tax
     * @return OrderModel
     */
    public function setBaseSubtotalInclTax($base_subtotal_incl_tax)
    {
        $this->base_subtotal_incl_tax = $base_subtotal_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseTotalDue()
    {
        return $this->base_total_due;
    }

    /**
     * @param float $base_total_due
     * @return OrderModel
     */
    public function setBaseTotalDue($base_total_due)
    {
        $this->base_total_due = $base_total_due;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingDiscountAmount()
    {
        return $this->shipping_discount_amount;
    }

    /**
     * @param float $shipping_discount_amount
     * @return OrderModel
     */
    public function setShippingDiscountAmount($shipping_discount_amount)
    {
        $this->shipping_discount_amount = $shipping_discount_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubtotalInclTax()
    {
        return $this->subtotal_incl_tax;
    }

    /**
     * @param float $subtotal_incl_tax
     * @return OrderModel
     */
    public function setSubtotalInclTax($subtotal_incl_tax)
    {
        $this->subtotal_incl_tax = $subtotal_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDue()
    {
        return $this->total_due;
    }

    /**
     * @param float $total_due
     * @return OrderModel
     */
    public function setTotalDue($total_due)
    {
        $this->total_due = $total_due;
        return $this;
    }

    /**
     * @return int
     */
    public function getIncrementId()
    {
        return $this->increment_id;
    }

    /**
     * @param int $increment_id
     * @return OrderModel
     */
    public function setIncrementId($increment_id)
    {
        $this->increment_id = $increment_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->base_currency_code;
    }

    /**
     * @param string $base_currency_code
     * @return OrderModel
     */
    public function setBaseCurrencyCode($base_currency_code)
    {
        $this->base_currency_code = $base_currency_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountDescription()
    {
        return $this->discount_description;
    }

    /**
     * @param string $discount_description
     * @return OrderModel
     */
    public function setDiscountDescription($discount_description)
    {
        $this->discount_description = $discount_description;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteIp()
    {
        return $this->remote_ip;
    }

    /**
     * @param string $remote_ip
     * @return OrderModel
     */
    public function setRemoteIp($remote_ip)
    {
        $this->remote_ip = $remote_ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreCurrencyCode()
    {
        return $this->store_currency_code;
    }

    /**
     * @param string $store_currency_code
     * @return OrderModel
     */
    public function setStoreCurrencyCode($store_currency_code)
    {
        $this->store_currency_code = $store_currency_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
        return $this->store_name;
    }

    /**
     * @param string $store_name
     * @return OrderModel
     */
    public function setStoreName($store_name)
    {
        $this->store_name = $store_name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     * @return OrderModel
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingInclTax()
    {
        return $this->shipping_incl_tax;
    }

    /**
     * @param float $shipping_incl_tax
     * @return OrderModel
     */
    public function setShippingInclTax($shipping_incl_tax)
    {
        $this->shipping_incl_tax = $shipping_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseCustomerBalanceAmount()
    {
        return $this->base_customer_balance_amount;
    }

    /**
     * @param float $base_customer_balance_amount
     * @return OrderModel
     */
    public function setBaseCustomerBalanceAmount($base_customer_balance_amount)
    {
        $this->base_customer_balance_amount = $base_customer_balance_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomerBalanceAmount()
    {
        return $this->customer_balance_amount;
    }

    /**
     * @param float $customer_balance_amount
     * @return OrderModel
     */
    public function setCustomerBalanceAmount($customer_balance_amount)
    {
        $this->customer_balance_amount = $customer_balance_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param string $payment_method
     * @return OrderModel
     */
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessageFrom()
    {
        return $this->gift_message_from;
    }

    /**
     * @param string $gift_message_from
     * @return OrderModel
     */
    public function setGiftMessageFrom($gift_message_from)
    {
        $this->gift_message_from = $gift_message_from;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessageTo()
    {
        return $this->gift_message_to;
    }

    /**
     * @param string $gift_message_to
     * @return OrderModel
     */
    public function setGiftMessageTo($gift_message_to)
    {
        $this->gift_message_to = $gift_message_to;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessageBody()
    {
        return $this->gift_message_body;
    }

    /**
     * @param string $gift_message_body
     * @return OrderModel
     */
    public function setGiftMessageBody($gift_message_body)
    {
        $this->gift_message_body = $gift_message_body;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxName()
    {
        return $this->tax_name;
    }

    /**
     * @param string $tax_name
     * @return OrderModel
     */
    public function setTaxName($tax_name)
    {
        $this->tax_name = $tax_name;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * @param float $tax_rate
     * @return OrderModel
     */
    public function setTaxRate($tax_rate)
    {
        $this->tax_rate = $tax_rate;
        return $this;
    }

    /**
     * @return AddressModel[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param AddressModel[] $addresses
     * @return OrderModel
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @return OrderItems[]
     */
    public function getOrderItems()
    {
        return $this->order_items;
    }

    /**
     * @param OrderItems[] $order_items
     * @return OrderModel
     */
    public function setOrderItems($order_items)
    {
        $this->order_items = $order_items;
        return $this;
    }

    /**
     * @return OrderComments[]
     */
    public function getOrderComments()
    {
        return $this->order_comments;
    }

    /**
     * @param OrderComments[] $order_comments
     * @return OrderModel
     */
    public function setOrderComments($order_comments)
    {
        $this->order_comments = $order_comments;
        return $this;
    }
}