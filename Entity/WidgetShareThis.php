<?php
namespace Victoire\Widget\ShareThisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\CmsBundle\Entity\Widget;

/**
 * WidgetShareThis
 *
 * @ORM\Table("cms_widget_sharethis")
 * @ORM\Entity
 */
class WidgetShareThis extends Widget
{
    use \Victoire\CmsBundle\Entity\Traits\WidgetTrait;

}
