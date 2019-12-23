<?php

namespace PimpayBundle\Model;

/**
 * Class VerificationRow
 * @package PimpayBundle\Model
 */
class VerificationRow
{
    /**
     * @var string
     */
    private $oid;

    /**
     * @var float
     */
    private $pfr;

    /**
     * @var float
     */
    private $ptp;

    /**
     * @var float
     */
    private $dc;

    /**
     * @var float
     */
    private $cs;

    /**
     * @var float
     */
    private $ins;

    /**
     * @var float
     */
    private $tsc;

    /**
     * @var CustomTransaction[]
     */
    private $txs;

    /**
     * @return string
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * @param string $oid
     * @return VerificationRow
     */
    public function setOid(string $oid)
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * @return float
     */
    public function getPfr()
    {
        return $this->pfr;
    }

    /**
     * @param float $pfr
     * @return VerificationRow
     */
    public function setPfr(float $pfr)
    {
        $this->pfr = $pfr;

        return $this;
    }

    /**
     * @return float
     */
    public function getPtp()
    {
        return $this->ptp;
    }

    /**
     * @param float $ptp
     * @return VerificationRow
     */
    public function setPtp(float $ptp)
    {
        $this->ptp = $ptp;

        return $this;
    }

    /**
     * @return float
     */
    public function getDc()
    {
        return $this->dc;
    }

    /**
     * @param float $dc
     * @return VerificationRow
     */
    public function setDc(float $dc)
    {
        $this->dc = $dc;

        return $this;
    }

    /**
     * @return float
     */
    public function getCs()
    {
        return $this->cs;
    }

    /**
     * @param float $cs
     * @return VerificationRow
     */
    public function setCs(float $cs)
    {
        $this->cs = $cs;

        return $this;
    }

    /**
     * @return float
     */
    public function getIns()
    {
        return $this->ins;
    }

    /**
     * @param float $ins
     * @return VerificationRow
     */
    public function setIns(float $ins)
    {
        $this->ins = $ins;

        return $this;
    }

    /**
     * @return CustomTransaction[]
     */
    public function getTxs(): array
    {
        return $this->txs;
    }

    /**
     * @param CustomTransaction[] $txs
     * @return VerificationRow
     */
    public function setTxs(array $txs)
    {
        $this->txs = $txs;

        return $this;
    }

    /**
     * @return float
     */
    public function getTsc()
    {
        return $this->tsc;
    }

    /**
     * @param float $tsc
     * @return VerificationRow
     */
    public function setTsc(float $tsc)
    {
        $this->tsc = $tsc;

        return $this;
    }
}
