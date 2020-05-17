<?php

namespace Extcode\Cart\Tests\Unit\Domain\Model\Order;

/*
 * This file is part of the package extcode/cart.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Nimut\TestingFramework\TestCase\UnitTestCase;

class TransactionTest extends UnitTestCase
{
    /**
     * @var \Extcode\Cart\Domain\Model\Order\Transaction
     */
    protected $transaction = null;

    /**
     *
     */
    public function setUp()
    {
        $this->transaction = new \Extcode\Cart\Domain\Model\Order\Transaction();
    }

    /**
     * @test
     */
    public function getTxnIdInitiallyReturnsEmptyString()
    {
        $this->assertSame(
            '',
            $this->transaction->getTxnId()
        );
    }

    /**
     * @test
     */
    public function setTxnIdSetsTnxId()
    {
        $transactionId = 'transaction-id';

        $this->transaction->setTxnId($transactionId);

        $this->assertSame(
            $transactionId,
            $this->transaction->getTxnId()
        );
    }
}
