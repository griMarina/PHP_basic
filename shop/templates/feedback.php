<div class="post_title">
    <h2>Feedback</h2>
</div>
<p><?=$message?></p>
<form class="form_fd" action="/feedback/<?=$actionFeedback?>" method="POST">
    <input type="text" hidden name="id" value="<?=$result['id']?>">
    <input type="text" name="name" placeholder="Your name" value="<?=$result["name"]?>"><br>
    <textarea name="text" placeholder="Your feedback" cols="30" rows="10"><?=$result["text"]?></textarea><br>
    <input type="submit" value="<?=$buttonText?>">
</form>
<div class="list_fd">
    <?php foreach ($feedback as $value): ?> 
        <div class="one_fd">
            <strong><?=$value["name"]?></strong>: <?=$value["text"]?>
            <button><a href="/feedback/edit/?&id=<?=$value["id"]?>">Edit</a></button>
            <button><a href="/feedback/delete/?&id=<?=$value["id"]?>">Delete</a></button>
        </div>
    <?php endforeach; ?>
</div>