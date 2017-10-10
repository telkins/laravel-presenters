<?php 

namespace Olymbytes\Presenters\Traits;

use Olymbytes\Presenters\Support\PresenterFactory;

trait Presentable
{
    protected $presenterInstance;

    public function present()
    {
        if (!$this->presenterInstance) {
            $this->presenterInstance = (new PresenterFactory($this))->make();
        }

        return $this->presenterInstance;
    }
}
