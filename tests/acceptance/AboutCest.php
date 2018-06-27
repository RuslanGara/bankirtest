<?php

use yii\helpers\Url;
use Codeception\Util\Locator;
class AboutCest
{
    public function ensureThatAboutWorks(AcceptanceTester $I)
    {

        $I->amOnPage(Url::to('/'));


        $I->click('#selectorForMethod');

        $I->selectOption('#selectorForMethod','Логин/Пароль');




        $I->fillField('textfield', '*****');
        $I->fillField('passwordfield', '******%^');

        $I->click('Войти');
        $I->wait(40);

//        $I->waitForElement('//*[@id="dataGrid"]/tbody/tr/td/table/tbody/tr[2]/td/div/table/tbody/tr/td/div/table/tbody/tr/td/table/tbody/tr[1]/td[7]/table/tbody/tr/td[1]/a',30);
//        sleep(3);
//        $I->click("//*[@id=\"dataGrid\"]/tbody/tr/td/table/tbody/tr[2]/td/div/table/tbody/tr/td/div/table/tbody/tr/td/table/tbody/tr[1]/td[7]/table/tbody/tr/td[1]/a");
//        sleep(10);
//        $I->waitForElement('.ib-datagrid-header-cell-filter',30);
//        sleep(10);
//        $I->fillField('.ib-datagrid-header-cell-filter', 'bezman');
//        sleep(10);
//        $I->click('Логин', '.ib-datagrid-header-popup-apply-text');




    }
}
