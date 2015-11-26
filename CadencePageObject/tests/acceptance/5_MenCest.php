<?php
use \AcceptanceTester;

class MenCest
{

        function menPage(Step\Acceptance\LoginSteps $I, \Page\Men $menPage) {
            $menPage->men();
            $I->getZoom();
        }











}
