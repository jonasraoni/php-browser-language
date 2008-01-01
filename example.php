<?php
require_once 'Language.php';

//languages of the user ordered by preference
print_r(Language::getLanguages());
//give a list of languages, retrieves the one that best fits the user
echo Language::getBestMatch(array('X-Y', 'en-us', 'en', 'pt-br', 'pt'));