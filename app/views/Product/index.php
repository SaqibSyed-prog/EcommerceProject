<?php $this->view('navbar'); ?>
<br>
<div class="dropdown" style="margin-left: 30px; margin-bottom: 30px">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Sort Price
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" name="sort">
                <li><a class="dropdown-item" href="/Product/index?sort=asc" value="sort-asc">asc</a></li>
                <li><a class="dropdown-item" href="/Product/index?sort=desc" value="sort-desc">desc</a></li>
            </ul>
        </div>

<div class="container"> 
    <div class="row" style="padding: 10px; gap: 15px;">
<?php
foreach ($data as $item) {
    $image = $item->image;
    echo "
    <div class=card d-flex p-2 style=width:25rem;justify-content:center;>
    <img class=card-img-top src='$image' alt=Card image cap width=100%height=15vw>
    <div class=card-body>
        <h5 class=card-title>$item->product_name</h5>
        <p class=card-text>$item->description</p>
    </div>

    <ul class=list-group list-group-flush>
        <li class=list-group-item>In stock: $item->quantity</li>
        <li class=list-group-item>Cost each: $item->cost_price$</li>
    </ul>

    <div class=card-body>
        <a class='btn btn-primary' href='/Cart/insert/$item->product_id' class=card-link>Add to cart</a>
        <a class='btn btn-primary' href='/Wishlist/insert/$item->product_id' class=card-link>Add to wishlist</a>
    </div>
    </div>
    <br>
    <style>
    .card-img-top {
    width: 100%;
    height: 18vw;
    object-fit: cover;
    }
</style>";
}
?>

