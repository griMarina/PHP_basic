<h2>Catalog</h2>

<div>
    <?php foreach ($catalog as $item): ?>
        <div>
            <?=$item['name']?><br>
            <img src="./img/<?=$item['image']?>" alt="img" width="200"><br>
            Price: <?=$item['price']?><br>
            <button>Buy</button>
            <hr>
        </div>
    <?php endforeach; ?>
</div>