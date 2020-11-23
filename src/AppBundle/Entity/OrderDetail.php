<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OrderDetail
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="OrderDetail")
 */
class OrderDetail
{

    /**
     * @var int
     *
     * @ORM\Column (name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;

    /**
     * var int
     *
     * @ORM\Column (name="qty", type="integer")
     *
     */
    private $qty;

    /**
     * @var Product
     *
     * @ORM\ManyToOne (targetEntity="Product", inversedBy="ordersdetail")
     * @ORM\JoinColumn (name="product", referencedColumnName="id")
     */
    private $product;

    /**
     * @var Order
     *
     * @ORM\ManyToOne (targetEntity="Order", inversedBy="orderDetails")
     * @ORM\JoinColumn (name="order", referencedColumnName="id")
     */
    private $order;


    public function __construct(){

    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return OrderDetail
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return OrderDetail
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set order
     *
     * @param \AppBundle\Entity\Order $order
     *
     * @return OrderDetail
     */
    public function setOrder(\AppBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
