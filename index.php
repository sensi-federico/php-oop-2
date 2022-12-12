<!-- 
    
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine,
titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<!-- classi:

- prodotto [nome, peso, categoria{gane, gatto}, prezzo, immagine]
- categoria []
- cibo [...prodotto, gusto]
- collare [...prodotto, colore]
- cuccia [...prodotto, tipo(esterno/interno)] -->

<?php


class Product
{
    public $name;
    public $category;
    protected $price;
    public $image;

    public function __construct($name, Category $category, $price, $image)
    {
        $this->name = $name;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price . ' €';
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class Category
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Food extends Product
{
    public $taste;

    public function __construct($taste)
    {
        $this->taste = $taste;
    }
}

class Collar extends Product
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }
}

class PetsBed extends Product
{
    public $bed;

    public function __construct($bed)
    {
        $this->bed = $bed;
    }
}


$food = new Product('croccantini', new Category('dog'), '13,99', 'picsum');
var_dump($food);
