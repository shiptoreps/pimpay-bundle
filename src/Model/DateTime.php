<?php

namespace PimpayBundle\Model;

/**
 * Class DateTime
 * @package PimpayBundle\Model
 */
class DateTime
{
    const FORMAT = 'Y-m-d\TH:i:s\Z';

    /**
     * @var string
     */
    private $value;

    /**
     * DateTime constructor.
     * @param \DateTime $dateTime
     */
    public function __construct(\DateTime $dateTime)
    {
        $this->value = $dateTime->format(self::FORMAT);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
