<?php

namespace Victoire\Widget\ShareThisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetShareThis
 *
 * @ORM\Table("vic_widget_sharethis")
 * @ORM\Entity
 */
class WidgetShareThis extends Widget
{

    use \Victoire\Bundle\WidgetBundle\Entity\Traits\LinkTrait;

    /**
     * @var boolean
     *
     * @ORM\Column(name="facebookEnabled", type="boolean")
     */
    private $facebookEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="twitterEnabled", type="boolean")
     */
    private $twitterEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="googleplusEnabled", type="boolean")
     */
    private $googleplusEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="linkedinEnabled", type="boolean")
     */
    private $linkedinEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="viadeoEnabled", type="boolean")
     */
    private $viadeoEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailEnabled", type="boolean")
     */
    private $emailEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pinterestEnabled", type="boolean")
     */
    private $pinterestEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bufferEnabled", type="boolean")
     */
    private $bufferEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shareThisEnabled", type="boolean")
     */
    private $shareThisEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="twitterVia", type="string", length=255, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    protected $twitterVia;

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
     * Set facebookEnabled
     *
     * @param boolean $facebookEnabled
     *
     * @return ShareThis
     */
    public function setFacebookEnabled($facebookEnabled)
    {
        $this->facebookEnabled = $facebookEnabled;

        return $this;
    }

    /**
     * Get facebookEnabled
     *
     * @return boolean
     */
    public function getFacebookEnabled()
    {
        return $this->facebookEnabled;
    }

    /**
     * Set twitterEnabled
     *
     * @param boolean $twitterEnabled
     *
     * @return ShareThis
     */
    public function setTwitterEnabled($twitterEnabled)
    {
        $this->twitterEnabled = $twitterEnabled;

        return $this;
    }

    /**
     * Get twitterEnabled
     *
     * @return boolean
     */
    public function getTwitterEnabled()
    {
        return $this->twitterEnabled;
    }

    /**
     * Set googleplusEnabled
     *
     * @param boolean $googleplusEnabled
     *
     * @return ShareThis
     */
    public function setGoogleplusEnabled($googleplusEnabled)
    {
        $this->googleplusEnabled = $googleplusEnabled;

        return $this;
    }

    /**
     * Get googleplusEnabled
     *
     * @return boolean
     */
    public function getGoogleplusEnabled()
    {
        return $this->googleplusEnabled;
    }

    /**
     * Set linkedinEnabled
     *
     * @param boolean $linkedinEnabled
     *
     * @return ShareThis
     */
    public function setLinkedinEnabled($linkedinEnabled)
    {
        $this->linkedinEnabled = $linkedinEnabled;

        return $this;
    }

    /**
     * Get linkedinEnabled
     *
     * @return boolean
     */
    public function getLinkedinEnabled()
    {
        return $this->linkedinEnabled;
    }

    /**
     * Set viadeoEnabled
     *
     * @param boolean $viadeoEnabled
     *
     * @return ShareThis
     */
    public function setViadeoEnabled($viadeoEnabled)
    {
        $this->viadeoEnabled = $viadeoEnabled;

        return $this;
    }

    /**
     * Get viadeoEnabled
     *
     * @return boolean
     */
    public function getViadeoEnabled()
    {
        return $this->viadeoEnabled;
    }

    /**
     * Set emailEnabled
     *
     * @param boolean $emailEnabled
     *
     * @return ShareThis
     */
    public function setEmailEnabled($emailEnabled)
    {
        $this->emailEnabled = $emailEnabled;

        return $this;
    }

    /**
     * Get emailEnabled
     *
     * @return boolean
     */
    public function getEmailEnabled()
    {
        return $this->emailEnabled;
    }

    /**
     * Set pinterestEnabled
     *
     * @param boolean $pinterestEnabled
     *
     * @return ShareThis
     */
    public function setPinterestEnabled($pinterestEnabled)
    {
        $this->pinterestEnabled = $pinterestEnabled;

        return $this;
    }

    /**
     * Get pinterestEnabled
     *
     * @return boolean
     */
    public function getPinterestEnabled()
    {
        return $this->pinterestEnabled;
    }

    /**
     * Set bufferEnabled
     *
     * @param boolean $bufferEnabled
     *
     * @return ShareThis
     */
    public function setBufferEnabled($bufferEnabled)
    {
        $this->bufferEnabled = $bufferEnabled;

        return $this;
    }

    /**
     * Get bufferEnabled
     *
     * @return boolean
     */
    public function getBufferEnabled()
    {
        return $this->bufferEnabled;
    }

    /**
     * Set shareThisEnabled
     *
     * @param boolean $shareThisEnabled
     *
     * @return ShareThis
     */
    public function setShareThisEnabled($shareThisEnabled)
    {
        $this->shareThisEnabled = $shareThisEnabled;

        return $this;
    }

    /**
     * Get shareThisEnabled
     *
     * @return boolean
     */
    public function getShareThisEnabled()
    {
        return $this->shareThisEnabled;
    }

    /**
     * Set twitterVia
     *
     * @param string $twitterVia
     *
     * @return ShareThis
     */
    public function setTwitterVia($twitterVia)
    {
        $this->twitterVia = $twitterVia;

        return $this;
    }

    /**
     * Get twitterVia
     *
     * @return string
     */
    public function getTwitterVia()
    {
        return $this->twitterVia;
    }

}
