<?php

namespace PimpayBundle\Model;

/**
 * Class RecipientNotification
 * @package PimpayBundle\Model
 */
class DeliveryDetails
{

    const DELIVERY_METHOD_PICKUP_POINT = 'pickup_point';

    const DELIVERY_METHOD_COURIER = 'courier';

    const DELIVERY_METHOD_POSTAMAT = 'postamat';

    /**
     * @var string
     */
    private $tariffPlan;

    /**
     * @var string
     */
    private $deliveryMethod;

    /**
     * @var string
     */
    private $agreedDeliveryDateReason;

    /**
     * @var \DateTime
     */
    private $agreedDeliveryStartTime;

    /**
     * @var \DateTime
     */
    private $agreedDeliveryEndTime;

    /**
     * @var \DateTime
     */
    private $tariffDateEnd;

    /**
     * @var \DateTime
     */
    private $freeStorageDateEnd;

    /**
     * @var string
     */
    private $failReason;

    /**
     * @var bool
     */
    private $canBeChanged;

    /**
     * @var DeliveryDelayReasonHistoryItem[]
     */
    private $deliveryDelayReasonHistoryItems;

    /**
     * @var ReceiverStockScheduleItem[]
     */
    private $receiverStockSchedule;

    /**
     * @var CallsHistory
     */
    private $callsHistory;

    /**
     * @return string
     */
    public function getTariffPlan()
    {
        return $this->tariffPlan;
    }

    /**
     * @param string $tariffPlan
     * @return DeliveryDetails
     */
    public function setTariffPlan(string $tariffPlan)
    {
        $this->tariffPlan = $tariffPlan;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param string $deliveryMethod
     * @return DeliveryDetails
     */
    public function setDeliveryMethod(string $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgreedDeliveryDateReason()
    {
        return $this->agreedDeliveryDateReason;
    }

    /**
     * @param string $agreedDeliveryDateReason
     * @return DeliveryDetails
     */
    public function setAgreedDeliveryDateReason(string $agreedDeliveryDateReason)
    {
        $this->agreedDeliveryDateReason = $agreedDeliveryDateReason;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAgreedDeliveryStartTime()
    {
        return $this->agreedDeliveryStartTime;
    }

    /**
     * @param \DateTime $agreedDeliveryStartTime
     * @return DeliveryDetails
     */
    public function setAgreedDeliveryStartTime(\DateTime $agreedDeliveryStartTime)
    {
        $this->agreedDeliveryStartTime = $agreedDeliveryStartTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAgreedDeliveryEndTime()
    {
        return $this->agreedDeliveryEndTime;
    }

    /**
     * @param \DateTime $agreedDeliveryEndTime
     * @return DeliveryDetails
     */
    public function setAgreedDeliveryEndTime(\DateTime $agreedDeliveryEndTime)
    {
        $this->agreedDeliveryEndTime = $agreedDeliveryEndTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTariffDateEnd()
    {
        return $this->tariffDateEnd;
    }

    /**
     * @param \DateTime $tariffDateEnd
     * @return DeliveryDetails
     */
    public function setTariffDateEnd(\DateTime $tariffDateEnd)
    {
        $this->tariffDateEnd = $tariffDateEnd;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFreeStorageDateEnd()
    {
        return $this->freeStorageDateEnd;
    }

    /**
     * @param \DateTime $freeStorageDateEnd
     * @return DeliveryDetails
     */
    public function setFreeStorageDateEnd(\DateTime $freeStorageDateEnd)
    {
        $this->freeStorageDateEnd = $freeStorageDateEnd;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailReason()
    {
        return $this->failReason;
    }

    /**
     * @param string $failReason
     * @return DeliveryDetails
     */
    public function setFailReason(string $failReason)
    {
        $this->failReason = $failReason;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCanBeChanged()
    {
        return $this->canBeChanged;
    }

    /**
     * @param bool $canBeChanged
     * @return DeliveryDetails
     */
    public function setCanBeChanged(bool $canBeChanged)
    {
        $this->canBeChanged = $canBeChanged;

        return $this;
    }

    /**
     * @return DeliveryDelayReasonHistoryItem[]
     */
    public function getDeliveryDelayReasonHistoryItems()
    {
        return $this->deliveryDelayReasonHistoryItems;
    }

    /**
     * @param DeliveryDelayReasonHistoryItem[] $deliveryDelayReasonHistoryItems
     * @return DeliveryDetails
     */
    public function setDeliveryDelayReasonHistoryItems(array $deliveryDelayReasonHistoryItems)
    {
        $this->deliveryDelayReasonHistoryItems = $deliveryDelayReasonHistoryItems;

        return $this;
    }

    /**
     * @return ReceiverStockScheduleItem[]
     */
    public function getReceiverStockSchedule()
    {
        return $this->receiverStockSchedule;
    }

    /**
     * @param ReceiverStockScheduleItem[] $receiverStockSchedule
     * @return DeliveryDetails
     */
    public function setReceiverStockSchedule(array $receiverStockSchedule)
    {
        $this->receiverStockSchedule = $receiverStockSchedule;

        return $this;
    }

    /**
     * @return CallsHistory
     */
    public function getCallsHistory(): CallsHistory
    {
        return $this->callsHistory;
    }

    /**
     * @param CallsHistory $callsHistory
     * @return DeliveryDetails
     */
    public function setCallsHistory(CallsHistory $callsHistory)
    {
        $this->callsHistory = $callsHistory;

        return $this;
    }

}
