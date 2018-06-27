<?php

use yii\helpers\Url;
use Codeception\Util\Locator;



class AboutCest
{

    public function vhodvTESTlk(AcceptanceTester $I)
    {

        $I->amOnPage(Url::to('/'));

        //ввод логина и пароля//
        $I->selectOption('selectorForMethod','Логин/Пароль');
        $I->fillField('#textfield', 'RETAILBA');
        $I->fillField('#passwordfield', 'QW34er%^');
        $I->click('Войти');
        $I->wait(30);
        sleep(6);
        //Конец_ввод логина и пароля//

        //кнопка создать клиента заведение
        $I->waitForElement('//*[@id="submitImpl"]/table/tbody/tr/td/img',5);
        $I->wait(5);
        $I->click("//*[@id=\"submitImpl\"]/table/tbody/tr/td/img");
        $I->wait(3);
        //  Закрыт__кнопка создать клиента //

        //ВВод ФИО логина и пароля
        $I->fillField('#surname', surname);
        $I->fillField( '#name', name);
        $I->fillField('#maskField',maskField);
        $I->wait(3);
        $I->waitForElement('#submitImpl_0',5);
        $I->click('//span[text()="Найти"]');
        //закрыт__ВВод ФИО логина и пароля + кнопка поиска

        //проверка что таблица содержит 3 строчки и не более и не меньше
        $I->seeNumberOfElements('//table[@class=\'ib - overflow ib - datagrid - rows\']/tbody[count(tr)=3]', 0);
        //Закрыт__проверка что таблица содержит 3 строчки и не более и не меньше

        //ожидание загрузки клиента и проставление чекбокса
        $I->waitForElement('//div[@class=\'ib-datagrid-checkbox\']/input',10);
        $I->wait(3);
        $I->click('//div[@class=\'ib-datagrid-checkbox\']/input');
        $I->wait(3);
        $I->wait(4);
        $I->click('//span[text()="Добавить"]');
        //Конец___ожидание загрузки клиента и проставление чекбокса

        //Анкета Клиента
        $I->wait(40);
        sleep(10);
        $name= $I->grabValueFrom("//input[@id='field_2']");
        $fio= $I->grabValueFrom("//input[@id='field_3']");
        $otch=$I->grabValueFrom("//input[@id='field_4']");
        $I->fillField('//*[@id=\'field_5\']', $fullname=$name.' '.$fio.' '.$otch);
        sleep(10);
        $I->fillField('#field_11', login);
        $I->selectOption('modelNotOverrideSelect','Клиент, полный доступ');
        $I->fillField('#field_16', '+79656648888');
        //Конец__Анкета Клиента

        //Кнопка сохранения анкеты
        $I->click('//span[text()=\'Сохранить\']');
        //Конец__Кнопка сохранения анкеты

        //Кнопка выхода
        $I->wait(3);
        $I->waitForElement('//span[@title=\'Выход\']',5);
        $I->click('//span[@title=\'Выход\']');
        // Закрыть__Кнопка выхода

        //Кнопка подтверждения выхожа
        $I->wait(3);
        $I->waitForElement(' //input[@value=\'Да\']',5);
        $I->click(' //input[@value=\'Да\']');
        //Закрыть__подтверждения выхожа

        //ввод логина и пароля//
        $I->selectOption('selectorForMethod','Логин/Пароль');
        $I->fillField('#textfield', 'RETAILBS');
        $I->fillField('#passwordfield', 'QW34er%^');
        $I->click('Войти');
        $I->wait(30);
        sleep(6);
        //Конец_ввод логина и пароля//

        //Работа с фильтром//
        $I->click("//td[text()='Логин']//../td/a[@title='Установить фильтр']/img");
        sleep(5);

        $I->fillField('//*[@id="textfield_3"]', login);
        $I->wait(3);
        $I->click('//*[@id="submitImpl_25"]/span');
        $I->wait(3);
        $I->click('dataGrid_sel');
        sleep(5);


///Работа с фильтром//
//        $I->click("//td[text()='Логин']//../td/a[@title='Установить фильтр']/img");
//        sleep(5);
//
//        $I->fillField('//*[@id="textfield_4"]', 'UIK8454647');
//        $I->wait(3);
//        $I->click('//*[@id="submitImpl_29"]/span');
//
//        $I->wait(3);
//        $I->click('/html/body/div[4]/div[3]/div/div[2]/div/form/table/tbody/tr/td/table/tbody/tr[3]/td/div/table/tbody/tr/td/div/table/tbody/tr/td/table/tbody/tr[3]/td[7]');
///Окончание___Работа с фильтром//


    }
}
