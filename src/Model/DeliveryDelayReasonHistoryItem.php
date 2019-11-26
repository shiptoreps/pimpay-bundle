<?php

namespace PimpayBundle\Model;

/**
 * Class DeliveryDelayReasonHistoryItem
 * @package PimpayBundle\Model
 */
class DeliveryDelayReasonHistoryItem
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $reason;

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return DeliveryDelayReasonHistoryItem
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return DeliveryDelayReasonHistoryItem
     */
    public function setCode(string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return DeliveryDelayReasonHistoryItem
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

}
