<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\yii2\events;

use yii\base\Event;

class AttributeLabelsEvent extends Event
{
    public array $attributeLabels = [];
}
