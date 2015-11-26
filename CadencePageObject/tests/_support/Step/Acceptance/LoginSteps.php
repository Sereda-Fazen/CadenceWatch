<?php
namespace Step\Acceptance;

class LoginSteps extends \AcceptanceTester
{

    public function StepsLoginIn()
    {
        $I = $this;
        $I->amOnPage('/customer/account/login/');
        $I->fillField('#email', 'fazen7@mail.ru');
        $I->fillField('#pass', '1234567');
        $I->click('Login');
    }
/*
    public function StepsMyAccount()
    {
        $I = $this;
        $I->amOnPage('customer/account/edit/');
        $I->fillField('#firstname', 'sasha');
        $I->fillField('#middlename', 'alex');
        $I->fillField('#lastname', 'sereda');
        $I->fillField('#email', 'fazen7@mail.ru');
        $I->click('#change_password');
        $I->fillField('#current_password','123456');
        $I->fillField('#password','1234567');
        $I->fillField('#confirmation','1234567');
        $I->click('div.buttons-set > button.button > span > span');
    }
*/
    public function giftCardEmpty () {

        $I = $this;
        for ($c = 4; $c >= 0; $c-- ) {
            $card = rand();
            $I->fillField('#gift-voucher-code', $card);
            $I->click('//*[@id="addredeem-giftvoucher-code"]/div/div/button[1]/span/span');
            $I->waitForText('Gift card "'.$card.'" is invalid.You have '.$c.' time(s) remaining to re-enter Gift Card code.', 3, '.error-msg');
        }
        $I->fillField('#gift-voucher-code', $card);
        $I->click('//*[@id="addredeem-giftvoucher-code"]/div/div/button[1]/span/span');

    }

    public function getHeaderMenu () {

        $I = $this;
        for ($i = 2; $i <= 9; $i++) {
            $I->click('#nav > li:nth-of-type(' . $i . ') > a.level-top > span');}
            $I->click('li.home > a');
    }
    public function getFooterMenu () {
        $I = $this;
        for ($i = 1; $i <= 4; $i++) {
            $I->click('div.footer > ul > li:nth-of-type('.$i.') > a');
        }
    }






}
