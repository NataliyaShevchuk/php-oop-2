<?php
require_once "models/Product.php";
require_once "models/Category.php";
require_once "models/Food.php";

$catFood = new Category("Cat Food", "fa-solid fa-cat");
$dogFood = new Category("Dog Food", "fa-solid fa-dog");
$catToy = new Category("Cat Toy", "fa-solid fa-cat" );
$dogToy = new Category("Dog Toy", "fa-solid fa-dog");


//Cats and Dogs Toys
$sparaPalla = new Product("/img/macchina_spara_palle.png","Sparapalla automatica", 23.99, $dogToy );
$topolinoTelecomandato = new Product("/img/topolino_telecomandato.png", "Topolino a batteria, telecomandato", 24.99, $catToy);

//Food products: cats
$naturalTrainer_catfood = new Food("/img/adult_catfood.png", "Natural Trainer", 5.95, $catFood, "Pollo, riso, stracetti di manzo, verdure", "adult");
$purinaOne_catfood = new Food("/img/purina_adult_catfood.png", "Purina One", 8.00, $catFood , "Salmone, riso, Tonno, verdure" , "adult" );
$whiskas_catfood = new Food("/img/almost_adult_catfood.png", "Whiskas", 4.99, $catFood, "Pollo, anatra, verdure", "quasi adulto (1-2 anni)");

//Food products: dogs
$pedigree_dogfood = new Food("/img/adult_food.png", "Pedigree", 6.70, $dogFood, "Pollo, riso, verdure", "adult");
$pedigreePuppy_dogfood = new Food("/img/puppy_food.png", "Pedigree", 7.20, $dogFood, "Salmone, carne bianca, latte", "puppy");
$virbac_dogfood = new Food("/img/senior_food.png", "Virbac", 5.55, $dogFood, "Verdure, pollo, riso", "senior");


$products = [
    $sparaPalla,
    $topolinoTelecomandato,
    $naturalTrainer_catfood,
    $purinaOne_catfood, 
    $whiskas_catfood,
    $pedigree_dogfood,
    $pedigreePuppy_dogfood,
    $virbac_dogfood,
];

// var_dump($products);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <title>Php Oop 2</title>

    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main class="container pb-5">
        <div class="row">
            <?php  foreach($products as $product){ ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <!-- <img src="<?php echo$product->getImage()?>" alt=""> -->
                            <?php echo "<img src='{$product->getImage()}' />" ?>  
                            <h4> <?php echo $product->getName() ?> </h4>
                            <h5> <?php echo $product->getPrice() ?> </h5>
                            
                        </div>
                    </div>
                </div>
            <?php } ?>
                </div>
            </div>
        </div>
    </main>


</body>

</html>