<div class="post_title"><h2><?=$postTitle ?? ""?></h2></div>
<form class="item">
<?php if (isset($item)) :?>
    <div class="item_desc">
        <img src="/img/gallery_img/big/<?=$item['item_img']?>">
        <div class="item_txt">
            <p><?=$item['item_desc']?></p>
            <p><?=$item['item_price']?> $</p>
            <button type="submit">Buy</button>
        </div>
    </div>
<?php else :?>
    <p>This item might not exist or no longer available</p>    
<?php endif; ?>
    
</form>