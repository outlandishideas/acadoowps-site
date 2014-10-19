<?php

namespace Outlandish\SiteBundle\PostType;


class Person extends \Outlandish\AcadOowpBundle\PostType\Person {
    public static function postTypeParentId()
    {
        return 13;
    }


} 