<?php
namespace Step\Acceptance;

class Admin extends \AcceptanceTester
{
    public function loginAsAdmin()
    {
        $I = $this;
        // if snapshot exists - skipping login
        // comment these lines if using phantomjs as WebDriver
        if ($I->loadSessionSnapshot('login'))
        {
            return;
        }

        $I->amOnPage('auth/login');
        $I->fillField('email', 'admin@demo.com');
        $I->fillField('password', 'demo12345');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/backend');

        $I->saveSessionSnapshot('login');
    }
}
