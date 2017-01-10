<?php

use Step\Acceptance\Admin as AdminTester;

class CategoryCest
{
    public function _before(AdminTester $I)
    {
    }

    public function _after(AdminTester $I)
    {
    }

    // tests
    public function createCategory(AdminTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnPage('backend/categories/create');
        $I->fillField('title', 'News');

        $I->fillTinyMceEditorByName('description', 'This is category for News Content');
        $I->fillField('excerpt', 'This is category for News Content');
        $I->fillField('seo_title', 'This is category for News Content');
        $I->fillField('seo_description', 'This is category for News Content');

        $I->click('Save');
        $I->see('Category successfully created!');
    }
}
