<?php


namespace App\Tests\acceptance;


use App\Tests\ApiTester;

class SimpleApiCest
{
    public function testApi(ApiTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST(
            '/rbac-api',
            [
                'test' => 'something',
            ]
        );
        $I->canSeeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
}