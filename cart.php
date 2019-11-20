<?php require_once 'inc/head.php';
require_once 'inc/data/products.php';
if (empty($_SESSION))
{
    header('Location:index.php');
}
?>
    <section class="cookies container-fluid">
    <div class="row">
        <h2>Panier</h2>
        <?php
        if (!empty($_COOKIE['PecanNuts']))
        {?>
            <p>Pecan nuts : <?= $_COOKIE['PecanNuts']?></p>
            <?php
        }
        if (!empty($_COOKIE['ChocolateChips']))
        {?>
            <p>Chocolate Chips : <?= $_COOKIE['ChocolateChips']?></p>
            <?php
        }
        if (!empty($_COOKIE['chocolateCookie']))
        {?>
            <p>Chocolate cookie : <?= $_COOKIE['chocolateCookie']?></p>
            <?php
        }
        if (!empty($_COOKIE['M&MS']))
        {?>
            <p>M&M's© cookies : <?= $_COOKIE['M&MS']?></p>
            <?php
        }
        ?>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>