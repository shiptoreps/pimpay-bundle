<?php

namespace PimpayBundle\Model;

/**
 * Class Claim
 * @package PimpayBundle\Model
 */
class Claim
{
    const CLAIM_TERM_TYPE_REG = 'reg';

    const CLAIM_TERM_TYPE_FED = 'fed';

    /**
     * @var string
     */
    private $termType;

    /**
     * @var float
     */
    private $paymentSum;

    /**
     * @var \DateTime
     */
    private $paymentDate;

    /**
     * @var string
     */
    private $tin;

    /**
     * @var string
     */
    private $contractPartyName;

    /**
     * @var string
     */
    private $contractNumber;

    /**
     * @var string
     */
    private $contractDate;

    /**
     * @var bool
     */
    private $disableService;

    /**
     * @return string
     */
    public function getTermType()
    {
        return $this->termType;
    }

    /**
     * @param string $termType
     * @return Claim
     */
    public function setTermType(string $termType)
    {
        $this->termType = $termType;

        return $this;
    }

    /**
     * @return float
     */
    public function getPaymentSum()
    {
        return $this->paymentSum;
    }

    /**
     * @param float $paymentSum
     * @return Claim
     */
    public function setPaymentSum(float $paymentSum)
    {
        $this->paymentSum = $paymentSum;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDate(): \DateTime
    {
        return $this->paymentDate;
    }

    /**
     * @param \DateTime $paymentDate
     * @return Claim
     */
    public function setPaymentDate(\DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     * @return Claim
     */
    public function setTin(string $tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * @return string
     */
    public function getContractPartyName()
    {
        return $this->contractPartyName;
    }

    /**
     * @param string $contractPartyName
     * @return Claim
     */
    public function setContractPartyName(string $contractPartyName)
    {
        $this->contractPartyName = $contractPartyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * @param string $contractNumber
     * @return Claim
     */
    public function setContractNumber(string $contractNumber)
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getContractDate()
    {
        return $this->contractDate;
    }

    /**
     * @param string $contractDate
     * @return Claim
     */
    public function setContractDate(string $contractDate)
    {
        $this->contractDate = $contractDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableService(): bool
    {
        return $this->disableService;
    }

    /**
     * @param bool $disableService
     * @return Claim
     */
    public function setDisableService(bool $disableService)
    {
        $this->disableService = $disableService;

        return $this;
    }
}
