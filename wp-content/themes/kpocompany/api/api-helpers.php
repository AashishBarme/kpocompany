<?php

function api_slug_maker($url)
{
    $baseurl = get_site_url();
    return str_replace($baseurl,'',$url);
}