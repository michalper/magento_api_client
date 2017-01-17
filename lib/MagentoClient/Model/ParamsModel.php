<?php

namespace MagentoClient\Model;

use Itav\Component\Serializer\Serializer;
use Tools\Tools;

/**
 * Class ParamsModel
 * @package MagentoClient\Model
 */
class ParamsModel
{
    /**
     * @var string
     */
    private $resource;

    /**
     * @var array
     */
    private $filter = [];

    /**
     * @var integer
     */
    private $page;

    /**
     * @var string
     */
    private $order;

    /**
     * @var string
     */
    private $dir;

    /**
     * @var integer;
     */
    private $limit;

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     * @return ParamsModel
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     * @return ParamsModel
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * @param string $dir
     * @return ParamsModel
     */
    public function setDir($dir)
    {
        $this->dir = $dir;
        return $this;
    }

    /**
     * @param FilterModel $filterModel
     * @return ParamsModel
     */
    public function addFilter(FilterModel $filterModel)
    {
        $this->filter[] = $filterModel;
        return $this;
    }

    /**
     * @return string
     */
    public function getParams()
    {
        $params = [];
        $ret = false;

        if ($this->page) {
            $params['page'] = $this->page;
        }

        if ($this->limit) {
            $params['limit'] = $this->limit;
        }

        if ($this->order) {
            $params['order'] = $this->order;
        }

        if ($this->dir) {
            $params['dir'] = $this->dir;
        }

        if ($this->filter) {
            $i = 0;
            $s = new Serializer();
            /** @var FilterModel $filter */
            foreach ($this->filter as $filter) {
                $params['filter'][$i] = $s->normalize($filter);
                $i++;
            }
        }

        if (!empty($params)) {
            $ret = '?' . urldecode(http_build_query($params));
        }
        return $this->resource . $ret;
    }

}