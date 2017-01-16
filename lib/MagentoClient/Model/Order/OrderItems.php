<?php

namespace MagentoClient\Model\Order;

class OrderItems
{
    /**
     * @var integer
     */
    private $item_id;

    /**
     * @var integer
     */
    private $parent_item_id;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $qty_canceled;

    /**
     * @var float
     */
    private $qty_invoiced;

    /**
     * @var float
     */
    private $qty_ordered;

    /**
     * @var float
     */
    private $qty_refunded;

    /**
     * @var float
     */
    private $qty_shipped;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $base_price;

    /**
     * @var float
     */
    private $original_price;

    /**
     * @var float
     */
    private $base_original_price;

    /**
     * @var float
     */
    private $tax_percent;

    /**
     * @var float
     */
    private $tax_amount;

    /**
     * @var float
     */
    private $base_tax_amount;

    /**
     * @var float
     */
    private $discount_amount;

    /**
     * @var float
     */
    private $base_discount_amount;

    /**
     * @var float
     */
    private $row_total;

    /**
     * @var float
     */
    private $base_row_total;

    /**
     * @var float
     */
    private $price_incl_tax;

    /**
     * @var float
     */
    private $base_price_incl_tax;

    /**
     * @var float
     */
    private $row_total_incl_tax;

    /**
     * @var float
     */
    private $base_row_total_incl_tax;

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @param int $item_id
     * @return OrderItems
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentItemId()
    {
        return $this->parent_item_id;
    }

    /**
     * @param int $parent_item_id
     * @return OrderItems
     */
    public function setParentItemId($parent_item_id)
    {
        $this->parent_item_id = $parent_item_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return OrderItems
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return OrderItems
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getQtyCanceled()
    {
        return $this->qty_canceled;
    }

    /**
     * @param float $qty_canceled
     * @return OrderItems
     */
    public function setQtyCanceled($qty_canceled)
    {
        $this->qty_canceled = $qty_canceled;
        return $this;
    }

    /**
     * @return float
     */
    public function getQtyInvoiced()
    {
        return $this->qty_invoiced;
    }

    /**
     * @param float $qty_invoiced
     * @return OrderItems
     */
    public function setQtyInvoiced($qty_invoiced)
    {
        $this->qty_invoiced = $qty_invoiced;
        return $this;
    }

    /**
     * @return float
     */
    public function getQtyOrdered()
    {
        return $this->qty_ordered;
    }

    /**
     * @param float $qty_ordered
     * @return OrderItems
     */
    public function setQtyOrdered($qty_ordered)
    {
        $this->qty_ordered = $qty_ordered;
        return $this;
    }

    /**
     * @return float
     */
    public function getQtyRefunded()
    {
        return $this->qty_refunded;
    }

    /**
     * @param float $qty_refunded
     * @return OrderItems
     */
    public function setQtyRefunded($qty_refunded)
    {
        $this->qty_refunded = $qty_refunded;
        return $this;
    }

    /**
     * @return float
     */
    public function getQtyShipped()
    {
        return $this->qty_shipped;
    }

    /**
     * @param float $qty_shipped
     * @return OrderItems
     */
    public function setQtyShipped($qty_shipped)
    {
        $this->qty_shipped = $qty_shipped;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return OrderItems
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
        return $this->base_price;
    }

    /**
     * @param float $base_price
     * @return OrderItems
     */
    public function setBasePrice($base_price)
    {
        $this->base_price = $base_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getOriginalPrice()
    {
        return $this->original_price;
    }

    /**
     * @param float $original_price
     * @return OrderItems
     */
    public function setOriginalPrice($original_price)
    {
        $this->original_price = $original_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseOriginalPrice()
    {
        return $this->base_original_price;
    }

    /**
     * @param float $base_original_price
     * @return OrderItems
     */
    public function setBaseOriginalPrice($base_original_price)
    {
        $this->base_original_price = $base_original_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxPercent()
    {
        return $this->tax_percent;
    }

    /**
     * @param float $tax_percent
     * @return OrderItems
     */
    public function setTaxPercent($tax_percent)
    {
        $this->tax_percent = $tax_percent;
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
     * @return OrderItems
     */
    public function setTaxAmount($tax_amount)
    {
        $this->tax_amount = $tax_amount;
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
     * @return OrderItems
     */
    public function setBaseTaxAmount($base_tax_amount)
    {
        $this->base_tax_amount = $base_tax_amount;
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
     * @return OrderItems
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->discount_amount = $discount_amount;
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
     * @return OrderItems
     */
    public function setBaseDiscountAmount($base_discount_amount)
    {
        $this->base_discount_amount = $base_discount_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getRowTotal()
    {
        return $this->row_total;
    }

    /**
     * @param float $row_total
     * @return OrderItems
     */
    public function setRowTotal($row_total)
    {
        $this->row_total = $row_total;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseRowTotal()
    {
        return $this->base_row_total;
    }

    /**
     * @param float $base_row_total
     * @return OrderItems
     */
    public function setBaseRowTotal($base_row_total)
    {
        $this->base_row_total = $base_row_total;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceInclTax()
    {
        return $this->price_incl_tax;
    }

    /**
     * @param float $price_incl_tax
     * @return OrderItems
     */
    public function setPriceInclTax($price_incl_tax)
    {
        $this->price_incl_tax = $price_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasePriceInclTax()
    {
        return $this->base_price_incl_tax;
    }

    /**
     * @param float $base_price_incl_tax
     * @return OrderItems
     */
    public function setBasePriceInclTax($base_price_incl_tax)
    {
        $this->base_price_incl_tax = $base_price_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalInclTax()
    {
        return $this->row_total_incl_tax;
    }

    /**
     * @param float $row_total_incl_tax
     * @return OrderItems
     */
    public function setRowTotalInclTax($row_total_incl_tax)
    {
        $this->row_total_incl_tax = $row_total_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseRowTotalInclTax()
    {
        return $this->base_row_total_incl_tax;
    }

    /**
     * @param float $base_row_total_incl_tax
     * @return OrderItems
     */
    public function setBaseRowTotalInclTax($base_row_total_incl_tax)
    {
        $this->base_row_total_incl_tax = $base_row_total_incl_tax;
        return $this;
    }
}