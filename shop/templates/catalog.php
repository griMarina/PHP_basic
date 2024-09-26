<div class="post_title">
    <h2>Catalog
    </h2>
</div>
<div class="gallery_img">
<?php foreach ($items as $item): ?>
    <form action="/catalog/buy" class="form_catalog" method="POST">
        <input type="text" hidden name="id" value="<?=$item['item_id']?>">
        <input type="text" hidden name="price" value="<?=$item['item_price']?>">
        <a class="photo" href="/item/?id=<?=$item['item_id']?>"><img src="<?=IMG_SMALL . $item['item_img']?>"/></a>
        <div class="form_text"><p><?=$item['item_title']?></p>
        <p><?=$item['item_price']?> $</p></div>
        <input class="submit_btn" type="submit" value="Buy">
    </form>     
<?php endforeach; ?>
</div>