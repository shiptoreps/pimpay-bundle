<?php

namespace PimpayBundle\Model;

/**
 * Class FailCallHistoryItem
 * @package PimpayBundle\Model
 */
class FailCallHistoryItem
{
    /**
     * @var string
     */
    private $reasonDescription;

    /**
     * @var string
     */
    private $reasonCode;

    /**
     * @var \DateTime
     */
    private $dateCall;

    /**
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->reasonDescription;
    }

    /**
     * @param string $reasonDescription
     * @return FailCallHistoryItem
     */
    public function setReasonDescription(string $reasonDescription)
    {
        $this->reasonDescription = $reasonDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * @param string $reasonCode
     * @return FailCallHistoryItem
     */
    public function setReasonCode(string $reasonCode)
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCall()
    {
        return $this->dateCall;
    }

    /**
     * @param \DateTime $dateCall
     * @return FailCallHistoryItem
     */
    public function setDateCall(\DateTime $dateCall)
    {
        $this->dateCall = $dateCall;

        return $this;
    }

}
