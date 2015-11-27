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
    public function giftCardEmpty()
    {

        $I = $this;
        for ($c = 4; $c >= 0; $c--) {
            $card = rand();
            $I->fillField('#gift-voucher-code', $card);
            $I->click('//*[@id="addredeem-giftvoucher-code"]/div/div/button[1]/span/span');
            $I->waitForText('Gift card "' . $card . '" is invalid.You have ' . $c . ' time(s) remaining to re-enter Gift Card code.', 3, '.error-msg');
        }
        $I->fillField('#gift-voucher-code', $card);
        $I->click('//*[@id="addredeem-giftvoucher-code"]/div/div/button[1]/span/span');

    }

    public function getHeaderMenu() {

        $I = $this;
        for ($i = 2; $i <= 9; $i++) {
            $I->click('#nav > li:nth-of-type(' . $i . ') > a.level-top > span');
        }
        $I->click('li.home > a');


    }
    public function getFooterMenu()
    {
        $I = $this;
        for ($i = 1; $i <= 4; $i++) {
            $I->click('div.footer > ul > li:nth-of-type(' . $i . ') > a');
        }
    }


    public function getZoom()
    {
        $I = $this;

        $rows = count($I->grabMultiple('//div/div[3]/ul'));
        for ($r = 1; $r <= $rows; $r++) {

            $cels = count($I->grabMultiple('//div/div[3]/ul[' . $r . ']/li'));
            for ($c = 1; $c <= $cels; $c++) {
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 70, 150);
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 150, 30);
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 30, 70);

            }
        }
    }

}








/*
public function getHeaderMenu()
{

    $I = $this;

    for ($i = 2; $i <= 9; $i++) {
        $I->click('#nav > li:nth-of-type(' . $i . ') > a.level-top > span');
        $rows = count($I->grabMultiple('//div/div[3]/ul'));
        for ($r = 1; $r <= $rows; $r++) {

            $cels = count($I->grabMultiple('//div/div[3]/ul[' . $r . ']/li'));
            for ($c = 1; $c <= $cels; $c++) {
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 70, 150);
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 150, 30);
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 30, 70);

            }
        }

    }
    $I->click('li.last.level-top > a.level-top > span');
    $rows = count($I->grabMultiple('//div/div[3]/ul'));
    for ($s = 1; $s <= $rows; $s++) {

        $cels = count($I->grabMultiple('//div/div[3]/ul[' . $s . ']/li'));
        for ($c = 1; $c <= $cels; $c++) {
            $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 70, 150);
            $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 150, 30);
            $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 30, 70);
        }
    }
    $I->click('li.home > a');

    $I->click('li.first.level-top > a.level-top > span');
    $rows = count($I->grabMultiple('//div/div[3]/ul'));
    for ($s = 1; $s <= $rows; $s++) {

        $cels = count($I->grabMultiple('//div/div[3]/ul[' . $s . ']/li'));
        for ($c = 1; $c <= $cels; $c++) {
            $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 70, 150);
            $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 150, 30);
            $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 30, 70);
        }
    }
    $I->click('li.home > a');
}
*/










