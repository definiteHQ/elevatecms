<?php

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function login(AcceptanceTester $I)
    {
        $I->amOnPage('auth/login');
        $I->fillField('email', 'admin@demo.com');
        $I->fillField('password', 'demo12345');
        $I->click('Login');
        $I->seeUrl('dashboard');
    }
}
