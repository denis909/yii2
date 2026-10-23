<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\yii2\traits;

use denis909\yii2\events\RulesEvent;

trait RulesTrait
{
    public function rules()
    {
        $rules = parent::rules();
        
        $event = new RulesEvent([
            'rules' => $rules
        ]);

        $this->trigger(RulesEvent::class, $event);

        return $event->rules;
    }
}