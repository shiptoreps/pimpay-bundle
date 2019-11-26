<?php

namespace PimpayBundle\Model;

/**
 * Class RecipientNotification
 * @package PimpayBundle\Model
 */
class RecipientNotification
{
    /**
     * @var bool
     */
    private $enable;

    /**
     * @var RecipientNotificationData
     */
    private $metadata;

    /**
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     * @return RecipientNotification
     */
    public function setEnable(bool $enable): RecipientNotification
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * @return RecipientNotificationData
     */
    public function getMetadata(): RecipientNotificationData
    {
        return $this->metadata;
    }

    /**
     * @param RecipientNotificationData $metadata
     * @return RecipientNotification
     */
    public function setMetadata(RecipientNotificationData $metadata): RecipientNotification
    {
        $this->metadata = $metadata;

        return $this;
    }

}
