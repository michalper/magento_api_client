<?php

namespace MagentoClient\Model;

class FilterModel
{

    /**
     * @var string
     */
    private $attribute;

    /**
     * @var string
     */
    private $neq;

    /**
     * @var string
     */
    private $in;

    /**
     * @var string
     */
    private $nin;

    /**
     * @var string
     */
    private $gt;

    /**
     * @var string
     */
    private $lt;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @return string
     */
    public function getNeq()
    {
        return rawurldecode($this->neq);
    }

    /**
     * @param string $neq
     * @return FilterModel
     */
    public function setNeq($neq)
    {
        $this->neq = rawurlencode($neq);
        return $this;
    }

    /**
     * @return string
     */
    public function getIn()
    {
        return rawurldecode($this->in);
    }

    /**
     * @param string $in
     * @return FilterModel
     */
    public function setIn($in)
    {
        $this->in = rawurlencode($in);
        return $this;
    }

    /**
     * @return string
     */
    public function getNin()
    {
        return rawurldecode($this->nin);
    }

    /**
     * @param string $nin
     * @return FilterModel
     */
    public function setNin($nin)
    {
        $this->nin = rawurlencode($nin);
        return $this;
    }

    /**
     * @return string
     */
    public function getGt()
    {
        return rawurldecode($this->gt);
    }

    /**
     * @param string $gt
     * @return FilterModel
     */
    public function setGt($gt)
    {
        $this->gt = rawurlencode($gt);
        return $this;
    }

    /**
     * @return string
     */
    public function getLt()
    {
        return rawurldecode($this->lt);
    }

    /**
     * @param string $lt
     * @return FilterModel
     */
    public function setLt($lt)
    {
        $this->lt = rawurlencode($lt);
        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return rawurldecode($this->from);
    }

    /**
     * @param string $from
     * @return FilterModel
     */
    public function setFrom($from)
    {
        $this->from = rawurlencode($from);
        return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return rawurldecode($this->to);
    }

    /**
     * @param string $to
     * @return FilterModel
     */
    public function setTo($to)
    {
        $this->to = rawurlencode($to);
        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return rawurldecode($this->attribute);
    }

    /**
     * @param string $attribute
     * @return FilterModel
     */
    public function setAttribute($attribute)
    {
        $this->attribute = rawurlencode($attribute);
        return $this;
    }
}