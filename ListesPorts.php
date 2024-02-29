<?php

$liaisons = array(
    "Belle-Ile-en-Mer:15:8.3:Quiberon:Le Palais",
    "Belle-Ile-en-Mer:24:9:Le Palais:Quiberon",
    "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon",
    "Belle-Ile-en-Mer:17:7.9:Sauzon:Quiberon",
    "Belle-Ile-en-Mer:19:23.7:Vannes:Le Palais",
    "Belle-Ile-en-Mer:11:25.1:Le Palais:Vannes",
    "Houat:25:8.8:Quiberon:Port St Gildas",
    "Houat:30:8.8:Port St Gildas:Quiberon",
    "Ile de Groix:21:7.7:Lorient:Port-Tudy",
    "Ile de Groix:22:7.4:Port-Tudy:Lorient"
);

echo "\n\nListe des ports:\n\n";

$ports = array_map(function ($liaison) {
    return explode(":", $liaison)[3];
}, $liaisons);

$portsUniques = array_unique($ports);
sort($portsUniques);

foreach ($portsUniques as $port) {
    echo "\t- $port\n";
}

?>
