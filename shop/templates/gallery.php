<?php foreach ($images as $img): ?>
    <a rel="gallery" class="photo" href="/img/gallery_img/big/<?=$img?>"><img src="/img/gallery_img/small/<?= $img?>"/></a>
    <?php endforeach; ?>
<p class="message"><?=$message?></p>