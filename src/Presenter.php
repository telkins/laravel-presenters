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

    private function getQualifiedMethods()
    {
        $class = get_called_class();
        $methods = get_class_methods($class);
        $currentMethod = __FUNCTION__;
        return array_filter($methods, function ($method) use ($currentMethod) {
            return substr($method, 0, 2) !== '__' && $method !== $currentMethod;
        });
    }

    public function __get($key)
    {
        if (in_array($key, $this->getQualifiedMethods())) {
            return call_user_func([$this, $key]);
        }

        return $this->model->{$key};
    }
}
