<?php 

namespace Olymbytes\Presenters;

use Exception;

abstract class Presenter
{
    /**
     * The model instance.
     *
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return call_user_func([$this, $property]);
        }
        
        throw new Exception(sprintf('%s does not respond to the "%s" property or method.', static::class, $property));
    }
}
