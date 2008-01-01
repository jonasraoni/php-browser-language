<?php
/*
 * Browser Language: Simple class to extract an ordered list of the user's preferred language from the header HTTP_ACCEPT_LANGUAGE.
 * Jonas Raoni Soares da Silva <http://raoni.org>
 * https://github.com/jonasraoni/php-browser-language
 */
 
require_once 'Language.php';

//languages of the user ordered by preference
print_r(Language::getLanguages());
//give a list of languages, retrieves the one that best fits the user
echo Language::getBestMatch(array('X-Y', 'en-us', 'en', 'pt-br', 'pt'));