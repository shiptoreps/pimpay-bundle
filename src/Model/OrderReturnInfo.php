<?php

namespace PimpayBundle\Model;

/**
 * Class OrderReturnInfo
 * @package PimpayBundle\Model
 */
class OrderReturnInfo
{
    /**
     * @var boolean
     */
    private $isReturn;

    /**
     * @var string
     */
    private $originOrderId;

    /**
     * @return bool
     */
    public function isReturn()
    {
        return $this->isReturn;
    }

    /**
     * @param bool $isReturn
     * @return OrderReturnInfo
     */
    public function setIsReturn(bool $isReturn)
    {
        $this->isReturn = $isReturn;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginOrderId()
    {
        return $this->originOrderId;
    }

    /**
     * @param string $originOrderId
     * @return OrderReturnInfo
     */
    public function setOriginOrderId(string $originOrderId)
    {
        $this->originOrderId = $originOrderId;

        return $this;
    }

}
