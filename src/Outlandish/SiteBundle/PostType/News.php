<?php

namespace Outlandish\SiteBundle\PostType;


class News extends \Outlandish\AcadOowpBundle\PostType\News {
    public static function postTypeParentId()
    {
        return 9;
    }


}