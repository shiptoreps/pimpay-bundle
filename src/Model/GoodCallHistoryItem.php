<?php

namespace PimpayBundle\Model;

/**
 * Class GoodCallHistoryItem
 * @package PimpayBundle\Model
 */
class GoodCallHistoryItem
{
    /**
     * @var \DateTime
     */
    private $dateCall;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @return \DateTime
     */
    public function getDateCall()
    {
        return $this->dateCall;
    }

    /**
     * @param \DateTime $dateCall
     * @return GoodCallHistoryItem
     */
    public function setDateCall(\DateTime $dateCall)
    {
        $this->dateCall = $dateCall;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     * @return GoodCallHistoryItem
     */
    public function setDeliveryDate(\DateTime $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

}
