<?php


namespace Outlandish\SiteBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;

class OutlandishSiteBundle extends Bundle {
    public function getParent()
    {
        return 'OutlandishAcadOowpBundle';
    }
}