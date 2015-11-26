<?php
use \AcceptanceTester;

class MenCest
{

        function womenPage(Step\Acceptance\LoginSteps $I, \Page\Women $womenPage) {
            $womenPage->women();
            $I->getZoom();
        }











}
