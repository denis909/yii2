<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\yii2\events;

use yii\base\Event;

class RulesEvent extends Event
{
    public array $rules = [];
}