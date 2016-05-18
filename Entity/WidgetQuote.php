<?php
namespace Victoire\Widget\QuoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;
use Victoire\Bundle\MediaBundle\Entity\Media;
use Victoire\Bundle\PageBundle\Entity\Page;
use Victoire\Bundle\WidgetBundle\Entity\Widget;


/**
 * WidgetQuote
 *
 * @ORM\Table("vic_widget_quote")
 * @ORM\Entity
 */
class WidgetQuote extends Widget
{

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    protected $color;

    /**
     * @var string
     *
     * @ORM\Column(name="quote", type="text")
     */
    protected $quote;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="avatar_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     * @VIC\ReceiverProperty("imageable")
     */
    protected $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255)
     */
    protected $job;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="company_logo_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     * @VIC\ReceiverProperty("imageable")
     */
    protected $companyLogo;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
     *
     * @return String
     */
    public function __toString()
    {
        return 'Quote #'.$this->id.' - '.$this->name;
    }


    /**
     * Set color
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set quote
     *
     * @param string $quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set job
     *
     * @param string $job
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set companyLogo
     *
     * @param string $companyLogo
     */
    public function setCompanyLogo($companyLogo)
    {
        $this->companyLogo = $companyLogo;

        return $this;
    }

    /**
     * Get companyLogo
     *
     * @return string
     */
    public function getCompanyLogo()
    {
        return $this->companyLogo;
    }

}
