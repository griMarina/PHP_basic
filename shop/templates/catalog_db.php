<div class="post_title">
    <h2>Catalog DB</h2>
</div>
<div class="gallery_img">
<?php foreach ($items as $item): ?>
    <form action="" class="form_catalog" >
        <a class="photo" href="/item/?id=<?=$item['item_id']?>"><img src="<?=IMG_SMALL . $item['item_img']?>"/></a>
        <div class="form_text"><p><?=$item['item_title']?></p>
        <p><?=$item['item_price']?> $</p></div>
        <button class="submit_btn" type="submit">Buy</button>
    </form>     
<?php endforeach; ?>
</div>