<?php if (isAuthorized()) :?>
    <div class="post_title">
        <h2>My Orders</h2>
    </div>
    <?php foreach ($orders as $order): ?> 
        <div class="form_cart">
                <img src="<?=IMG_SMALL . $order['item_img'] ?>" width="150"/>
                <div class="cart_text">
                    <p><?=$order['item_title']?></p>
                    <p>qnt: <?=$order['quantity']?></p>
                    <p><?=$order['item_price']?>$</p>
                    <p>total: <?=$order['item_price'] * $order['quantity']?>$</p>
                    <p>order status: <?=$order['status']?></p>
                </div>
        </div>         
        <hr>
    <?php endforeach; ?>
<?php else :?>
    <p>Not Authorized. Please sign in.</p>    
<?php endif; ?>
