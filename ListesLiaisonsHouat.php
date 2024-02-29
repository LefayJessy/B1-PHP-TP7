<?php
$liaison = array(
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
$liaisonHouat = array();

for ($i = count($liaison) - 1; $i >= 0; $i--) {
    if (strpos($liaison[$i], 'Houat') !== false) {
        $liaisonHouat[] = array_splice($liaison, $i, 1)[0];
    }
}

usort($liaisonHouat, function ($a, $b) {
    return explode(":", $a)[1] - explode(":", $b)[1];
});

echo "\n\nCodes des liaisons du secteur d'Houat :\n";
foreach ($liaisonHouat as $liaison) {
    echo "\t- " . explode(":", $liaison)[1] . "\n";
}
?>
