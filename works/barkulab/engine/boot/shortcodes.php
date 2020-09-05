<?php defined('MONSTRA_ACCESS') or die('No direct script access.');

/**
 * Add new shortcode {siteurl}
 */
Shortcode::add('siteurl', 'returnSiteUrl');
function returnSiteUrl()
{
    return Option::get('siteurl');
}


Shortcode::add('test777', 'returntest777');
function returntest777($attributes) {
    extract($attributes);
    if (isset($text)) $text = $text; else $text = 'http://vmv.su';
    return $text;
 	}