<?php 

namespace Olymbytes\Presenters\Support;

use ReflectionClass;

class PresenterFactory
{
    /**
     * The model instance.
     *
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;
    /**
     * Sets the model instance on the factory.
     *
     * @param Illuminate\Database\Eloquent\Model $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }
    /**
     * Get the model name.
     *
     * @return string
     */
    private function getModelName()
    {
        return (new ReflectionClass($this->model))->getShortName();
    }
    /**
     * Get the name of the presenter from the model.
     *
     * @return string
     */
    private function getPresenterName()
    {
        return config('presenters.namespace') . "\\" . $this->getModelName() . "Presenter";
    }
    /**
     * Instantiate the presenter.
     *
     * @return Mlcs\Models\Presenters\AbstractPresenter
     */
    public function make()
    {
        return (new ReflectionClass($this->getPresenterName()))->newInstance($this->model);
    }
}
