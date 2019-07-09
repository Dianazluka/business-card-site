<?php
$business_card_site = simplexml_load_file('business_card_site.xml');

echo $business_card_site->portfolio[1]->description_of_he_project;






?>