<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("film.xml");

$x=$xmlDoc->getElementsByTagName('En');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$film=($y->childNodes);

for ($i=0;$i<$film->length;$i++) {
  //Process only element nodes
  if ($film->item($i)->nodeType==1) {
    echo("<b>" . $film->item($i)->nodeName . ":</b> ");
    echo("<h1>" .$film->item($i)->childNodes->item(0)->nodeValue . "</h1> ");
    echo("<br>");
  }
}
?> 