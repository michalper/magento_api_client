<?php

namespace MagentoClient\Model;

class FilterModel
{
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
        return $this->neq;
    }

    /**
     * @param string $neq
     * @return FilterModel
     */
    public function setNeq($neq)
    {
        $this->neq = $neq;
        return $this;
    }

    /**
     * @return string
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * @param string $in
     * @return FilterModel
     */
    public function setIn($in)
    {
        $this->in = $in;
        return $this;
    }

    /**
     * @return string
     */
    public function getNin()
    {
        return $this->nin;
    }

    /**
     * @param string $nin
     * @return FilterModel
     */
    public function setNin($nin)
    {
        $this->nin = $nin;
        return $this;
    }

    /**
     * @return string
     */
    public function getGt()
    {
        return $this->gt;
    }

    /**
     * @param string $gt
     * @return FilterModel
     */
    public function setGt($gt)
    {
        $this->gt = $gt;
        return $this;
    }

    /**
     * @return string
     */
    public function getLt()
    {
        return $this->lt;
    }

    /**
     * @param string $lt
     * @return FilterModel
     */
    public function setLt($lt)
    {
        $this->lt = $lt;
        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return FilterModel
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return FilterModel
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }
}