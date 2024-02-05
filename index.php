<?php

libxml_use_internal_errors(true);

$site = "https://ehcreative.com.br/";
$html = file_get_contents($site);

$doc = new DOMDocument();
$doc->loadHTML($html);
$xpath = new DOMXPath($doc);
/**
 * Realizando a busca
 */
$domList = $xpath->query('.//span');

/** @var DOMNode $item */
foreach ($domList as $item) {
  # code...
  echo $item->textContent.PHP_EOL;
}
?>

