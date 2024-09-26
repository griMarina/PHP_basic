<div class="post_title">
    <h2>Orders</h2>
</div>
    <form action="" method="POST">
        <table>
            <tr>
                <th>Order id</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>Order status</th>
            </tr>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><a href="/order_details/?id=<?=$order['id']?>"><?=$order['id']?></a></td>
                    <td><?=$order['name']?> <?=$order['surname']?></td>
                    <td><?=$order['phone']?></td>
                    <td><?=$order['status']?></td>
                </tr>
            <?php endforeach; ?>
        </table>            
    </form> 