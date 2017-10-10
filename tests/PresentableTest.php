<?php 

namespace Olymbytes\Presenters\Test;

use Olymbytes\Presenters\Test\Models\Order;

class PresentableTest extends TestCase
{
    /** @test */
    function it_presents_the_title()
    {
        $order = new Order([
            'title' => 'some title',
        ]);

        $this->assertEquals(strtoupper($order->title), $order->present()->title);
    }
}
