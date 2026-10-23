<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\yii2\traits;

use denis909\yii2\events\LoadEvent;

trait LoadTrait
{
    public function load($data, $formName = null)
    {
        $isValid = parent::load($data, $formName);
        
        $event = new LoadEvent([
            'isValid' => $isValid,
            'values' => $data,
            'formName' => $formName
        ]);

        $this->trigger(LoadEvent::class, $event);

        return $event->isValid;
    }
}