<?php $this->view('navbar'); ?>
<br>

<form action="/Profile/search" method="get" style='display:inline-block'>					
			<div class="input-group">
			    <input type="search" name='search_term' class="form-control" placeholder="Search..." />
			  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
			</div>		
		</form>

<div class="dropdown" style="margin-left: 30px; margin-bottom: 30px">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <?=_("sort by username") ?>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" name="sort">
        <li><a class="dropdown-item" href="/Profile/allProfile?sort=asc" value="sort-asc"><?=_("asc") ?></a></li>
        <li><a class="dropdown-item" href="/Profile/allProfile?sort=desc" value="sort-desc"><?=_("desc") ?></a></li>
    </ul>
</div>
	
<br>
<?php
foreach ($data as $item) {
    $image = $item->image;
    // echo "<tr>  
	// <img src='/images/$item->image'><br>
    // <td type=name>$item->fullname</td> <br>
    // <td type=name>$item->city</td> <br>
    // <td type=name>$item->state</td> <br>
    // <td type=action><a href='/Wishlist/getProfileWishlist/$item->profile_id' type=hidden>view this profile's wishlist</a></td><br>
    // </tr> <br>";

    echo "<div class=card>
    <div class=row g-0>
        <div class=col-sm-5>
            <img src='/images/$item->image' class=card-img-top h-100>
        </div>
        <div class=col-sm-7>
            <div class=card-body>
                <h3 class=card-title>$item->fullname</h3>
                <h6> $item->city</h6>
                <a href=# class=btn btn-primary stretched-link>View Profile</a>
            </div>
        </div>
    </div>
</div>";
}
?>
