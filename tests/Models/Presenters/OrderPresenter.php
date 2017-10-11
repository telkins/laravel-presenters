<?php 

namespace Olymbytes\Presenters\Test\Models\Presenters;

use Olymbytes\Presenters\Presenter;

class OrderPresenter extends Presenter
{
    public function title()
    {
        return strtoupper($this->title);
    }
}
