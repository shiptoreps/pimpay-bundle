<?php

namespace PimpayBundle\Model;

/**
 * Class RejectedPayment
 * @package PimpayBundle\Model
 */
class RequestedPayment
{
    /**
     * @var string
     */
    private $externalId;

    /**
     * @var string
     */
    private $tin;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $purposeOfPayment;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $vatValue;

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return RequestedPayment
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     * @return RequestedPayment
     */
    public function setTin(string $tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return RequestedPayment
     */
    public function setAmount(float $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurposeOfPayment()
    {
        return $this->purposeOfPayment;
    }

    /**
     * @param string $purposeOfPayment
     * @return RequestedPayment
     */
    public function setPurposeOfPayment(string $purposeOfPayment)
    {
        $this->purposeOfPayment = $purposeOfPayment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return RequestedPayment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatValue()
    {
        return $this->vatValue;
    }

    /**
     * @param string $vatValue
     * @return RequestedPayment
     */
    public function setVatValue(string $vatValue)
    {
        $this->vatValue = $vatValue;

        return $this;
    }
}
