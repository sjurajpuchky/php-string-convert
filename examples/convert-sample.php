<?php

require_once __DIR__ .'/../src/StringConvert.php';

use BABA\Utils\StringConvert;

echo "WINDOWS-1250:".StringConvert::utf8ToWindows1250("Příliš žluťoučký kůň, řeřicha, éliška, měch.")."\n";
echo "UTF-8:".StringConvert::windows1250ToUtf8(StringConvert::utf8ToWindows1250("Příliš žluťoučký kůň, řeřicha, éliška, měch."))."\n";