<?php

namespace Victoire\Widget\ShareThisBundle\Resolver;

use Victoire\Bundle\WidgetBundle\Model\Widget;
use Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver;

class WidgetShareThisResolver extends BaseWidgetContentResolver
{
    private $shareThisPubKey;

    public function __construct($shareThisPubKey)
    {
        $this->shareThisPubKey = $shareThisPubKey;
    }

    /**
     * Get the static content of the widget.
     *
     * @param Widget $widget
     *
     * @return string
     */
    public function getWidgetStaticContent(Widget $widget)
    {
        $parameters = parent::getWidgetStaticContent($widget);
        $parameters['shareThisPubKey'] = $this->shareThisPubKey;

        return $parameters;
    }
}
