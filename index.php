<!-- 
    
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine,
titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

classi:

- prodotto [nome, peso, categoria{gane, gatto}, prezzo, immagine]
- categoria []
- cibo [...prodotto, gusto]
- collare [...prodotto, colore]
- cuccia [...prodotto, tipo(esterno/interno)]

<?php


class Product
{
    public $name;
    public $weight;
    public $category;
    protected $price;
    public $image;

    public function __construct($name, $weight, Category $category)
    {
        $this->name = $name;
        $this->category = $category;
        $this->weight = $weight;
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
