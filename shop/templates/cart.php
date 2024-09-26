<div class="post_title">
    <h2>Cart
    </h2>
</div>
<?php if ($count != 0) :?>
    <div class="cart">
        <?php foreach ($items as $item): ?>
            <form action="/cart/delete" class="form_cart" method="POST">
                <input type="text" hidden name="id" value="<?=$item['id']?>">
                <img src="<?=IMG_SMALL . $item['item_img']?>"/>
                <div class="cart_text">
                    <p><?=$item['item_title']?></p>
                    <p><?=$item['item_price']?> $</p>
                    <p>quantity: <?=$item['quantity']?></p>
                    <p>sum: <?=$item['quantity'] * $item['item_price'] ?> $</p>
                    <input class="submit_btn" type="submit" value="Delete">
                </div>
            </form>     
        <?php endforeach; ?>
    </div>
<?php else :?>
    <p>The cart is empty</p>    
<?php endif; ?>