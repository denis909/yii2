<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\yii2\traits;

use denis909\yii2\events\AttributeLabelsEvent;

trait AttributeLabelsTrait
{
    public function attributeLabels()
    {
        $attributeLabels = parent::attributeLabels();

        $event = new AttributeLabelsEvent([
            'attributeLabels' => $attributeLabels 
        ]);

        $this->trigger(AttributeLabelsEvent::class, $event);

        return $event->attributeLabels;
    }
}