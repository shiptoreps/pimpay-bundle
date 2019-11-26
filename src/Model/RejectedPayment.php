<?php

namespace PimpayBundle\Model;

/**
 * Class RejectedPayment
 * @package PimpayBundle\Model
 */
class RejectedPayment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @param int $id
     * @return RejectedPayment
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
