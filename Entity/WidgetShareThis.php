<?php
namespace Victoire\Widget\ShareThisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Entity\Widget;

/**
 * WidgetShareThis
 *
 * @ORM\Table("cms_widget_sharethis")
 * @ORM\Entity
 */
class WidgetShareThis extends Widget
{
    use \Victoire\Bundle\CoreBundle\Entity\Traits\WidgetTrait;

}
