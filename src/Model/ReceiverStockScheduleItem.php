<?php

namespace PimpayBundle\Model;

/**
 * Class ReceiverStockScheduleItem
 * @package PimpayBundle\Model
 */
class ReceiverStockScheduleItem
{
    /**
     * @var string
     */
    private $weekdayBegin;

    /**
     * @var string
     */
    private $weekdayEnd;

    /**
     * @var string
     */
    private $worktimeBegin;

    /**
     * @var string
     */
    private $worktimeEnd;

    /**
     * @return string
     */
    public function getWeekdayBegin()
    {
        return $this->weekdayBegin;
    }

    /**
     * @param string $weekdayBegin
     * @return ReceiverStockScheduleItem
     */
    public function setWeekdayBegin(string $weekdayBegin)
    {
        $this->weekdayBegin = $weekdayBegin;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeekdayEnd()
    {
        return $this->weekdayEnd;
    }

    /**
     * @param string $weekdayEnd
     * @return ReceiverStockScheduleItem
     */
    public function setWeekdayEnd(string $weekdayEnd)
    {
        $this->weekdayEnd = $weekdayEnd;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorktimeBegin()
    {
        return $this->worktimeBegin;
    }

    /**
     * @param string $worktimeBegin
     * @return ReceiverStockScheduleItem
     */
    public function setWorktimeBegin(string $worktimeBegin)
    {
        $this->worktimeBegin = $worktimeBegin;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorktimeEnd()
    {
        return $this->worktimeEnd;
    }

    /**
     * @param string $worktimeEnd
     * @return ReceiverStockScheduleItem
     */
    public function setWorktimeEnd(string $worktimeEnd)
    {
        $this->worktimeEnd = $worktimeEnd;

        return $this;
    }

}
