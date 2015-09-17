<?php
/**
 * Service User Info Testcase.
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-10-26
 */
namespace Tests\TestCase\Service\User;

use Tests\TestCase;

class InfoTest extends TestCase {

    /**
     * @test
     */
    public function queryAccountBalance() {
        $service_info = new \Service\User\Info();
        $balance = $service_info->queryAccountBalance();
        
        $this->assertEquals(200, $balance);
    }
}