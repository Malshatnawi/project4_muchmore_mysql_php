<?php
// session_start();
// if(empty($_SESSION['cart'])){
//     $_SESSION['cart']=array();
// }
// if(empty($_SESSION['quantity'])){
//     $_SESSION['quantity']=array();
// }

// echo "{$_GET['qty']}";



// array_push($_SESSION['quantity'], $_GET['qty']);



// array_push($_SESSION['cart'], $_GET['id']);


// print_r($_SESSION['cart']);
// echo "<br>";
// print_r($_SESSION['quantity']);

// header ("location: cart.php");




session_start();

if(empty($_SESSION['cartqty'])){
        $_SESSION['cartqty']=array();
    }

    $id=$_GET['id'];
    $qty=$_GET['qty'];


    $_SESSION['cartqty'][$id]=$qty;
    print_r($_SESSION['cartqty']);

    header ("location: cart.php");

?>