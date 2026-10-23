<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\yii2\events;

use yii\base\ModelEvent;

class LoadEvent extends ModelEvent
{
    public array $values = [];

    public ?string $formName;
}