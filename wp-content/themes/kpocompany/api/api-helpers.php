<?php

function api_slug_maker($url)
{
    $baseurl = get_site_url();
    return str_replace($baseurl,'',$url);
}

function homepage_seo() 
{

    $wpseo_titles = get_option('wpseo_titles');
    $result = new StdClass;
    $result->HomeSeoTitle = $wpseo_titles['title-home-wpseo'];
    $result->HomeMetaDesc = $wpseo_titles['metadesc-home-wpseo'];

    return $result;
}