<?php
use Step\Acceptance;

class ChronosCest
{

        function classicPage(Step\Acceptance\LoginSteps $I, \Page\Chronos $chronosPage) {
            $chronosPage->chronos();
            $I->getZoom();
        }











}
