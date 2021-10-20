<?php
$stringa = "Salve, sono una Stringa";

echo strlen($stringa);
echo "<BR>";

echo strtolower($stringa);
echo "<BR>";

echo strtoupper($stringa);
echo "<BR>";

echo ucwords($stringa);
echo "<BR>";

echo strrev($stringa);
echo "<BR>";

echo str_replace("Stringa", "Frase", $stringa);
?>