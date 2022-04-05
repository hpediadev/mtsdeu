<?php

$html = file_get_contents('http://smkn2pamekasan.sch.id/');

$dom = new DOMDocument();
@$dom->loadHTML($html);

// grab all the on the page
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");

$no = 1;
for ($i = 0; $i < $hrefs->length; $i++) {
       $href = $hrefs->item($i);
       $url = $href->getAttribute('href');
       echo $no.' - '. $url.' <hr> ';
       $no++;
}

?>