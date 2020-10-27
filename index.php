<?php
    include_once "classes.php";

$singa = new Carnivore(
    "singa",
    "darat",
    "melahirkan",
    "paru-paru",
    "kaki",
    "daging",
    "menerkam"
);

$bandeng = new Herbivore(
    "bandeng",
    "laut",
    "bertelur",
    "insang",
    "sirip",
    "tanaman",
    "klekap"
);

$kangkung = new Vegetable(
    "kangkung",
    "air",
    "dikotil",
    "tunggang",
    "kepala patah"
);

$kelapa = new Fruit(
    "kelapa",
    "darat",
    "monokotil",
    "serabut",
    "sejajar",
    "manis"
);

echo "<b> Singa </b> <br>";
$singa->description();

echo "<br>";

echo "<b> Bandeng </b> <br>";
$bandeng->description();

echo "<br>";

echo "<b> Kangkung </b> <br>";
$kangkung->description();

echo "<br>";

echo "<b> Kelapa </b> <br>";
$kelapa->description();