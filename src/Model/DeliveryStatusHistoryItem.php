<?php

namespace PimpayBundle\Model;

/**
 * Class DeliveryStatusHistoryItem
 * @package PimpayBundle\Model
 */
class DeliveryStatusHistoryItem
{
    /**
     * @var string
     */
    private $time;

    /**
     * @var string
     */
    private $uniformPimpayDeliveryStatus;

    /**
     * @var string
     */
    private $customDeliveryStatus;

    /**
     * @var string
     */
    private $deliveryServiceDeliveryStatus;

    /**
     * @var string
     */
    private $cityCode;

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     * @return $this
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time->format(DateTime::FORMAT);

        return $this;
    }

    /**
     * @return string
     */
    public function getUniformPimpayDeliveryStatus(): string
    {
        return $this->uniformPimpayDeliveryStatus;
    }

    /**
     * @param string $uniformPimpayDeliveryStatus
     * @return $this
     */
    public function setUniformPimpayDeliveryStatus(string $uniformPimpayDeliveryStatus)
    {
        $this->uniformPimpayDeliveryStatus = $uniformPimpayDeliveryStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomDeliveryStatus(): string
    {
        return $this->customDeliveryStatus;
    }

    /**
     * @param string $customDeliveryStatus
     * @return $this
     */
    public function setCustomDeliveryStatus(string $customDeliveryStatus)
    {
        $this->customDeliveryStatus = $customDeliveryStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryServiceDeliveryStatus(): string
    {
        return $this->deliveryServiceDeliveryStatus;
    }

    /**
     * @param string $deliveryServiceDeliveryStatus
     * @return $this
     */
    public function setDeliveryServiceDeliveryStatus(string $deliveryServiceDeliveryStatus)
    {
        $this->deliveryServiceDeliveryStatus = $deliveryServiceDeliveryStatus;

        return $this;
    }

    /**
     * @param string $cityCode
     * @return DeliveryStatusHistoryItem
     */
    public function setCityCode(string $cityCode)
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }
}
