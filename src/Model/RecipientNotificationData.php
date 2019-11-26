<?php

namespace PimpayBundle\Model;

/**
 * Class RecipientNotificationData
 * @package PimpayBundle\Model
 */
class RecipientNotificationData
{
    /**
     * @var string
     */
    private $sku;

    /**
     * @param string $sku
     * @return RecipientNotificationData
     */
    public function setSku(string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
}
