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

include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Type.php';
include_once __DIR__ . '/Models/Product.php';


// $food = new Product('croccantini', new Category('dog'), '13,99', 'picsum');
// var_dump($food);

$cardProduct = [
    $food = new Product('croccantini', new Category('dog'), '14,99', new Type('cibo'), 'https://picsum.photos/200/300'),
    $toy = new Product('pallina', new Category('cat'), '8,99', new Type('gioco'), 'https://picsum.photos/200/300'),
    $bed = new Product('cuccia', new Category('dog'), '89,95', new Type('cuccia'), 'https://picsum.photos/200/300')
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pet shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
</head>

<body class="bg-dark text-white">

    <h1 class="text-center py-5">Pet Shop</h1>
    <div class="container">
        <div class="row row-cols-3 g-4">
            <?php foreach ($cardProduct as $product) : ?>
                <div class="col">
                    <div class="card text-black" style="width:18rem;">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize"> <?= $product->name ?> </h5>
                            <?php if ($product->category->name == 'dog') : ?>
                                <h6 class="card-subtitle mb-2 text-muted "> <i class="fa-solid fa-dog"></i> </h6>
                            <?php else : ?>
                                <h6 class="card-subtitle mb-2 text-muted "> <i class="fa-solid fa-cat"></i> </h6>
                            <?php endif ?>
                            <h3 class="card-text text-black-50"><?= $product->getPrice() ?></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>