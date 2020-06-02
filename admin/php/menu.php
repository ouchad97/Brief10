<?php
    session_start();
    $_SESSION['$id']='admin';
    echo '<!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
            <title>SHOP</title>
        
            <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
        </script>

    </head>
    <body>
        
        <!-- nav -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
    if(!isset($_SESSION))
    {
        echo '<a href="../../index.php">Produit</a>';
    }
    else
    {
        if($_SESSION['$id']=='admin')
        {
            echo '
            <a href="categorie.php">Categorie</a>
            <a href="listProduit.php">Produit</a>
            <a href="managePanierStandard.php">Panier standard</a>
            <a href="#">Logout</a>
        </div>
        <span class="open_nav" onclick="openNav()">&#9776;</span>';
        }
    }
    echo '</ul>
            </div>
        </nav>
        <style><link rel="stylesheet" href="../css/style.css"></style>
        <script src="../js/jquery-3.4.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
    </html>';
?>