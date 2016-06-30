<?php
$xml=("http://www.nu.nl/rss/Algemeen");
echo "<head><link type='text/css' rel='stylesheet' href='style.css'></head>";

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');

echo "<div>";
echo "<h1>www.nu.nl</h1>";
for ($i=0; $i<=4; $i++) {
//    echo "<div >";
    $item_title=$x->item($i)->getElementsByTagName('title')
        ->item(0)->childNodes->item(0)->nodeValue;
    $item_link=$x->item($i)->getElementsByTagName('link')
        ->item(0)->childNodes->item(0)->nodeValue;
    $item_desc= wordwrap($x->item($i)->getElementsByTagName('description')
        ->item(0)->childNodes->item(0)->nodeValue, 20);
    echo ("<p><a href='" . $item_link . "'>" . $item_title . "</a><br>");
    echo ($item_desc . "</p>");
}
echo "</div>"
?>