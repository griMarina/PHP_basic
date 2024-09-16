<div class="post_title">
    <h2>Gallery</h2>
</div>
<div class="gallery_img">
<?php foreach ($images as $img): ?>
   
    <div ><a class="photo" href="/image/?id=<?=$img['id']?>"><img src="<?=IMG_SMALL . $img['name_img']?>"/></a>
    <p class="views"><?=$img['views']?> views</p></div>
    
<?php endforeach; ?>
</div>
<div class="upload_img_form">
    <p class="message"><?=$message?></p>
    <form class="form" method="POST" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <input type="submit" value="Upload">
    </form>
</div>
