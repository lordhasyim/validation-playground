<?php
session_start();
require 'Token.php';

if (isset($_POST['quantity'], $_POST['product'], $_POST['token'])) {
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    if (!empty($product) && !empty($quantity)) {
       if(Token::check($_POST['token'])) {
         echo "ok";
       }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="" method="post">
        <div class="product">
            <h1>Product</h1>
            <div class="field">
                Quantity : <input type="text" name="quantity">
                <input type="submit" value="Order">
                <input type="hidden" name="product" value="1">
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            </div>
        </div>
    </form>

</body>
</html>
<?php echo $_SESSION['token']  ?>