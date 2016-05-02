<?php

class Car
{
    private $marque;

    private $porte;

    private $couleur;

    public function getMarque()
    {
        echo $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    public function getPorte()
    {
        return $this->porte;
    }

    public function setPorte($porte)
    {
        $this->porte = $porte;

        return $this;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }
}

$peugeot = new Car;
$peugeot->setMarque('Peugeot');
$peugeot->setCouleur('bleu');
$peugeot->setPorte(3);

$renault = new Car;
$renault->setMarque('Renault');
$renault->setCouleur('gris');
$renault->setPorte(5);

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>First car:</h1>
Marque: <?= $peugeot->getMarque(); ?>
<br>
Couleur: <?= $peugeot->getCouleur(); ?>
<br>
Porte: <?= $peugeot->getPorte(); ?>
<br>
<h1>Second car:</h1>
Marque: <?= $renault->getMarque(); ?>
<br>
Couleur: <?= $renault->getCouleur(); ?>
<br>
Porte: <?= $renault->getPorte(); ?>
<br>

</body>
</html>