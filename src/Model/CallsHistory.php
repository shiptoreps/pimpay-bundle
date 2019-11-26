<?php

namespace PimpayBundle\Model;

/**
 * Class CallsHistory
 * @package PimpayBundle\Model
 */
class CallsHistory
{
    /**
     * @var GoodCallHistoryItem[]
     */
    private $goodCallsHistory;

    /**
     * @var FailCallHistoryItem[]
     */
    private $failCallsHistory;

    /**
     * @return GoodCallHistoryItem[]
     */
    public function getGoodCallsHistory()
    {
        return $this->goodCallsHistory;
    }

    /**
     * @param GoodCallHistoryItem[] $goodCallsHistory
     * @return CallsHistory
     */
    public function setGoodCallsHistory(array $goodCallsHistory)
    {
        $this->goodCallsHistory = $goodCallsHistory;

        return $this;
    }

    /**
     * @return FailCallHistoryItem[]
     */
    public function getFailCallsHistory()
    {
        return $this->failCallsHistory;
    }

    /**
     * @param FailCallHistoryItem[] $failCallsHistory
     * @return CallsHistory
     */
    public function setFailCallsHistory(array $failCallsHistory)
    {
        $this->failCallsHistory = $failCallsHistory;

        return $this;
    }

}
