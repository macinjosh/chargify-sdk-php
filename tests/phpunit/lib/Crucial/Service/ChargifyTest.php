<?php
use Crucial\Service\Chargify;

class Crucial_Service_ChargifyTest extends PHPUnit_Framework_TestCase
{
    public function testHelperInstances()
    {
        $chargify = new Chargify(array(
            'hostname'   => 'fdsfs',
            'api_key'    => 'fdsfds',
            'shared_key' => 'fdsfds'
        ));

        $adjustment = $chargify->adjustment();
        $this->assertInstanceOf('Crucial\Service\Chargify\Adjustment', $adjustment);

        $charge = $chargify->charge();
        $this->assertInstanceOf('Crucial\Service\Chargify\Charge', $charge);

        $component = $chargify->component();
        $this->assertInstanceOf('Crucial\Service\Chargify\Component', $component);

        $coupon = $chargify->coupon();
        $this->assertInstanceOf('Crucial\Service\Chargify\Coupon', $coupon);

        $customer = $chargify->customer();
        $this->assertInstanceOf('Crucial\Service\Chargify\Customer', $customer);

        $event = $chargify->event();
        $this->assertInstanceOf('Crucial\Service\Chargify\Event', $event);

        $product = $chargify->product();
        $this->assertInstanceOf('Crucial\Service\Chargify\Product', $product);

        $refund = $chargify->refund();
        $this->assertInstanceOf('Crucial\Service\Chargify\Refund', $refund);

        $statement = $chargify->statement();
        $this->assertInstanceOf('Crucial\Service\Chargify\Statement', $statement);

        $stats = $chargify->stats();
        $this->assertInstanceOf('Crucial\Service\Chargify\Stats', $stats);

        $subscription = $chargify->subscription();
        $this->assertInstanceOf('Crucial\Service\Chargify\Subscription', $subscription);

        $transaction = $chargify->transaction();
        $this->assertInstanceOf('Crucial\Service\Chargify\Transaction', $transaction);

        $webhook = $chargify->webhook();
        $this->assertInstanceOf('Crucial\Service\Chargify\Webhook', $webhook);
    }
}