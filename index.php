<?php
require 'inc/data/products.php';
require 'inc/head.php';
if (empty($_SESSION['username'])){
    header('Location: login.php');
}
if (isset($_GET['add_to_cart']))
{
    $id = $_GET['add_to_cart'];
    if ($id == 46){
        setCookie("PecanNuts", 1, strtotime("+5 days"));
    }
    if ($id == 36){
        setcookie("ChocolateChips",1, time() + (60*60*24));
    }
    if ($id == 58){
        setcookie("chocolateCookie",1, time() + (60*60*24));
    }
    if ($id == 32){
        setcookie("M&MS",1, time() + (60*60*24));
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <h2><span class="" aria-hidden="true"></span> Add to cart</h2>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary btn-lg active" role="button" title="">-</a>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary btn-lg active" role="button" title="">+</a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

