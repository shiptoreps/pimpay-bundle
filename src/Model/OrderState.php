<?php

namespace PimpayBundle\Model;

/**
 * Class OrderState
 * @package PimpayBundle\Model
 */
class OrderState
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var float
     */
    private $cost;

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
    private $time;

    /**
     * @var OrderItemState[]
     */
    private $items;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost(float $cost)
    {
        $this->cost = $cost;
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
     */
    public function setUniformPimpayDeliveryStatus(string $uniformPimpayDeliveryStatus)
    {
        $this->uniformPimpayDeliveryStatus = $uniformPimpayDeliveryStatus;
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
     */
    public function setCustomDeliveryStatus(string $customDeliveryStatus)
    {
        $this->customDeliveryStatus = $customDeliveryStatus;
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
     */
    public function setDeliveryServiceDeliveryStatus(string $deliveryServiceDeliveryStatus)
    {
        $this->deliveryServiceDeliveryStatus = $deliveryServiceDeliveryStatus;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time->format(DateTime::FORMAT);
    }

    /**
     * @param OrderItemState[] $items
     * @return OrderState
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return OrderItemState[]
     */
    public function getItems()
    {
        return $this->items;
    }
}
