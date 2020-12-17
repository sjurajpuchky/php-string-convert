<?php

require_once __DIR__ .'/../src/StringConvert.php';

use BABA\Utils\StringConvert;

echo StringConvert::windows1250ToUtf8(StringConvert::utf8ToWindows1250("Příliš žluťoučký kůň"));