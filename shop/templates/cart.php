<div class="post_title">
    <h2>Cart
    </h2>
</div>
<?php if ($count != 0) :?>
    <div class="cart">
        <?php foreach ($items as $item): ?>
            <form action="/cart/delete" class="form_cart" method="POST">
                <input type="text" hidden name="id" value="<?=$item['id']?>">
                <img src="<?=IMG_SMALL . $item['item_img']?>" />
                <div class="cart_text">
                    <p><?=$item['item_title']?></p>
                    <p><?=$item['item_price']?>$</p>
                    <p>qnt: <?=$item['quantity']?></p>
                    <p>sum: <?=$item['item_price'] * $item['quantity']?>$</p>
                    <input class="submit_btn" type="submit" value="Delete">
                </div>
            </form>     
        <?php endforeach; ?>
        <p>Total: <?=$sum?> $</p>
    </div>
    <form action="/cart/order" method="POST" class="checkout">
        <p>Customer details</p>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="surname" placeholder="Surname" required>
        <input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{3,}" required>
        <input type="submit" value="Checkout">
    </form>
<?php else :?>
    <p>The cart is empty</p>    
<?php endif; ?>