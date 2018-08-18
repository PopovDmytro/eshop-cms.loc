<?php if(!empty($_SESSION['cart'])):?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <tr>
                    <td>
                        <a href="product/<?=$item['alias'];?>">
                            <img src="images/<?=$item['img'] ;?>" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="product/<?=$item['alias'];?>">
                            <?=$item['title'] ;?>
                        </a>
                    </td>
                    <td>
                        <?=$item['qty'] ?>
                    </td>
                    <td>
                        <?=$item['price'] ?>
                    </td>
                    <td>
                        <span data-id="<?=$id;?>" class="del-item text-danger glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </td>
                </tr>
                <?php endforeach;?>
                <tr>
                    <td>Total: </td>
                    <td colspan="4" class="text-right cart-qty">
                        <?=$_SESSION['cart.qty'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Total Price: </td>
                    <td colspan="4" class="text-right cart-sum">
                        <?=$_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right']; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Cart is empty</h3>
<?php endif; ?>
