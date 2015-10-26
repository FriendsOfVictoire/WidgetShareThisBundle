<?php

namespace Victoire\Widget\ShareThisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetShareThis.
 *
 * @ORM\Table("vic_widget_sharethis")
 * @ORM\Entity
 */
class WidgetShareThis extends Widget
{
    use \Victoire\Bundle\WidgetBundle\Entity\Traits\LinkTrait;

    /**
     * @var bool
     *
     * @ORM\Column(name="facebookEnabled", type="boolean")
     */
    private $facebookEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="twitterEnabled", type="boolean")
     */
    private $twitterEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="googleplusEnabled", type="boolean")
     */
    private $googleplusEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="linkedinEnabled", type="boolean")
     */
    private $linkedinEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="viadeoEnabled", type="boolean")
     */
    private $viadeoEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="emailEnabled", type="boolean")
     */
    private $emailEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="pinterestEnabled", type="boolean")
     */
    private $pinterestEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="bufferEnabled", type="boolean")
     */
    private $bufferEnabled;

    /**
     * @var bool
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set facebookEnabled.
     *
     * @param bool $facebookEnabled
     *
     * @return ShareThis
     */
    public function setFacebookEnabled($facebookEnabled)
    {
        $this->facebookEnabled = $facebookEnabled;

        return $this;
    }

    /**
     * Get facebookEnabled.
     *
     * @return bool
     */
    public function getFacebookEnabled()
    {
        return $this->facebookEnabled;
    }

    /**
     * Set twitterEnabled.
     *
     * @param bool $twitterEnabled
     *
     * @return ShareThis
     */
    public function setTwitterEnabled($twitterEnabled)
    {
        $this->twitterEnabled = $twitterEnabled;

        return $this;
    }

    /**
     * Get twitterEnabled.
     *
     * @return bool
     */
    public function getTwitterEnabled()
    {
        return $this->twitterEnabled;
    }

    /**
     * Set googleplusEnabled.
     *
     * @param bool $googleplusEnabled
     *
     * @return ShareThis
     */
    public function setGoogleplusEnabled($googleplusEnabled)
    {
        $this->googleplusEnabled = $googleplusEnabled;

        return $this;
    }

    /**
     * Get googleplusEnabled.
     *
     * @return bool
     */
    public function getGoogleplusEnabled()
    {
        return $this->googleplusEnabled;
    }

    /**
     * Set linkedinEnabled.
     *
     * @param bool $linkedinEnabled
     *
     * @return ShareThis
     */
    public function setLinkedinEnabled($linkedinEnabled)
    {
        $this->linkedinEnabled = $linkedinEnabled;

        return $this;
    }

    /**
     * Get linkedinEnabled.
     *
     * @return bool
     */
    public function getLinkedinEnabled()
    {
        return $this->linkedinEnabled;
    }

    /**
     * Set viadeoEnabled.
     *
     * @param bool $viadeoEnabled
     *
     * @return ShareThis
     */
    public function setViadeoEnabled($viadeoEnabled)
    {
        $this->viadeoEnabled = $viadeoEnabled;

        return $this;
    }

    /**
     * Get viadeoEnabled.
     *
     * @return bool
     */
    public function getViadeoEnabled()
    {
        return $this->viadeoEnabled;
    }

    /**
     * Set emailEnabled.
     *
     * @param bool $emailEnabled
     *
     * @return ShareThis
     */
    public function setEmailEnabled($emailEnabled)
    {
        $this->emailEnabled = $emailEnabled;

        return $this;
    }

    /**
     * Get emailEnabled.
     *
     * @return bool
     */
    public function getEmailEnabled()
    {
        return $this->emailEnabled;
    }

    /**
     * Set pinterestEnabled.
     *
     * @param bool $pinterestEnabled
     *
     * @return ShareThis
     */
    public function setPinterestEnabled($pinterestEnabled)
    {
        $this->pinterestEnabled = $pinterestEnabled;

        return $this;
    }

    /**
     * Get pinterestEnabled.
     *
     * @return bool
     */
    public function getPinterestEnabled()
    {
        return $this->pinterestEnabled;
    }

    /**
     * Set bufferEnabled.
     *
     * @param bool $bufferEnabled
     *
     * @return ShareThis
     */
    public function setBufferEnabled($bufferEnabled)
    {
        $this->bufferEnabled = $bufferEnabled;

        return $this;
    }

    /**
     * Get bufferEnabled.
     *
     * @return bool
     */
    public function getBufferEnabled()
    {
        return $this->bufferEnabled;
    }

    /**
     * Set shareThisEnabled.
     *
     * @param bool $shareThisEnabled
     *
     * @return ShareThis
     */
    public function setShareThisEnabled($shareThisEnabled)
    {
        $this->shareThisEnabled = $shareThisEnabled;

        return $this;
    }

    /**
     * Get shareThisEnabled.
     *
     * @return bool
     */
    public function getShareThisEnabled()
    {
        return $this->shareThisEnabled;
    }

    /**
     * Set twitterVia.
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
     * Get twitterVia.
     *
     * @return string
     */
    public function getTwitterVia()
    {
        return $this->twitterVia;
    }
}
