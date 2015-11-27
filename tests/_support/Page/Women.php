<?php
namespace Page;

class Women
{
    public static $URL = '/';
    public static $women = '#nav > li:nth-of-type(2) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function women() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$women);
    }

}