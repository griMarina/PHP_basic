<div class="post_title"><h2><?=$postTitle ?? ""?></h2></div>
<?php if (isset($item)) :?>
    <form action="/item/buy/?id=<?=$item['item_id']?>" class="item_desc" method="POST">
        <input type="text" hidden name="price" value="<?=$item['item_price']?>">
        <img src="/img/gallery_img/big/<?=$item['item_img']?>">
        <div class="item_txt">
            <p><?=$item['item_desc']?></p>
            <p><?=$item['item_price']?> $</p>
            <input class="submit_btn" type="submit" value="Buy">
        </div>
    </form> 
<?php else :?>
    <p>This item might not exist or no longer available</p>    
<?php endif; ?>