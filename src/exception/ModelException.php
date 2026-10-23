<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\yii2\exceptions;

use yii\base\Model;
use Exception;

class ModelException extends Exception
{
    public function __construct(Model $model, $message = null, $code = 0, Exception $previous = null)
    {
        $message = $message ?? implode("\n", $model->getErrorSummary(true));

        parent::__construct($message, $code, $previous);
    }
}