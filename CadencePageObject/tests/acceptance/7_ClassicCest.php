<?php
use \AcceptanceTester;

class ClassicCest
{

        function classicPage(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $classicPage->classic();
            $I->getZoom();
        }











}
