<?php

use Step\Acceptance\Admin as AdminTester;

class UserCest
{
    public function _before(AdminTester $I)
    {
    }

    public function _after(AdminTester $I)
    {
    }

    // tests
    public function testCreate(AdminTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnPage('backend/users/create');
        $I->fillField('username', 'Acme User');
        $I->fillField('email', 'admin@acme.com');
        $I->fillField('first_name', 'John');
        $I->fillField('last_name', 'Doe');
        $I->fillField('password', '123456');
        $I->fillField('confirm_password', '123456');
        $I->see('User succesfully created!');
    }
}
