<?php

namespace PimpayBundle\Model;

/**
 * Class OrderItem
 * @package PimpayBundle\Model
 */
class OrderItem
{
    const VAT_20 = 'vat_20';

    const VAT_18 = 'vat_18';

    const VAT_10 = 'vat_10';

    const VAT_0 = 'vat_0';

    const VAT_NO = 'vat_no';

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var float|null
     */
    private $value;

    /**
     * @var integer|null
     */
    private $count;

    /**
     * @var float|null
     */
    private $weight;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * @var string
     */
    private $vatValue;

    /**
     * @var string
     */
    private $status;

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     * @return $this
     */
    public function setValue(float $value = null)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int|null $count
     * @return $this
     */
    public function setCount(int $count = null)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     * @return $this
     */
    public function setWeight(float $weight = null)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     * @return $this
     */
    public function setCategory(string $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrderItem
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return OrderItem
     */
    public function setSku(string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return OrderItem
     */
    public function setCost(float $cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return OrderItem
     */
    public function setLength(float $length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return OrderItem
     */
    public function setWidth(float $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return OrderItem
     */
    public function setHeight(float $height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatValue()
    {
        return $this->vatValue;
    }

    /**
     * @param string $vatValue
     * @return OrderItem
     */
    public function setVatValue(string $vatValue)
    {
        $this->vatValue = $vatValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return OrderItem
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

}
