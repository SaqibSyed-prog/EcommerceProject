<?php $this->view('navbar'); ?>
<a href='/Checkout//'>delete from cart</a>
<br>
<?php
foreach ($data as $item) {
    $product = new \app\models\Product();
    $product = $product->get($item->product_id);
    $profile = new \app\models\Profile();
    $profile = $profile->get($item->profile_id);
    
    $image = $product->image;
    echo "<tr>
    <img src='$image'><br>
    <td type=name>$product->product_name</td> <br>
    <td type=name>$product->cost_price</td>$ <br>
    <td type=name>$product->quantity</td> <br>
    <td type=name>$product->description</td> <br>
    <td type=name>$item->profile_id</td> <br>
    <button type=action class=btn btn-primary value=increase style='background-color:red;'>+</button>
    <button type=action class=btn btn-primary value=increase style='background-color:red;'>-</button><br>

    <form method='post'>
    <input name='add' type=submit value='+'>
    <h3><em></em></h3>
</form>
    <td type=action><a href='/Cart/delete/$item->cart_id'>delete from cart</a></td><br>
    </tr> <br>";
}
?>