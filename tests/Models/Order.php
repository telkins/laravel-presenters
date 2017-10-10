<?php 

namespace Olymbytes\Presenters\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Olymbytes\Presenters\Traits\Presentable;

class Order extends Model
{
    use Presentable;

    protected $fillable = ['title'];
}
