<div class="post_title"><h2><?=$postTitle ?? ""?></h2></div>
<?php if (isset($orders)) :?>
    <form action="/order_details/status/?id=<?=$id?>"  method="POST">
    <p>User ID: <?=$orders[0]["user_id"] ?? 'guest'?></p>
    <p>Item details: </p>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>qnt x price</th>
                    <th>total</th>
                </tr>
                <?php foreach ($orders as $order): ?> 
                <tr>
                    <td><?=$order['item_id']?></td>
                    <td><?=$order['item_title']?></td>
                    <td><?=$order['quantity']?> X <?=$order['item_price']?>$</td>
                    <td><?=$order['item_price'] * $order['quantity']?>$</td>
                </tr>
                <?php endforeach; ?>
            </table>
        <p>Order status: <?=$status?></p>
        <label for="status">Change order status:</label>
        <select name="status" id="status">
            <option value="pending" <?php if ($status == "pending") echo "selected"?>>Pending</option>
            <option value="awaiting payment" <?php if ($status == "awaiting payment") echo "selected"?>>Awaiting Payment </option>
            <option value="completed" <?php if ($status == "completed") echo "selected"?>>Completed</option>
            <option value="shipped" <?php if ($status == "shipped") echo "selected"?>>Shipped</option>
            <option value="refunded" <?php if ($status == "refunded") echo "selected"?>>Refunded</option>
            <option value="cancelled" <?php if ($status == "cancelled") echo "selected"?>>Cancelled</option>
        </select>
        <input type="submit" value="Submit">
    </form>
<?php else :?>
    <p>This order might not exist or no longer available</p>    
<?php endif; ?>