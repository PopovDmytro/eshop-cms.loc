<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Order <?=$order['id']?>
        <?php if(!$order['status']):?>
            <a href="<?=ADMIN;?>/order/change?id=<?=$order['id']; ?>&status=1" class="btn btn-success btn-xs">Accept</a>
        <?php else:?>
            <a href="<?=ADMIN;?>/order/change?id=<?=$order['id']; ?>&status=0" class="btn btn-default btn-xs">Reject</a>
        <?php endif;?>
        <a href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>" class="btn btn-danger btn-xs delete">Delete order</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN; ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="<?=ADMIN; ?>/order">Orders list</a></li>
        <li>Order <?=$order['id']?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <tbody>
                                <tr>
                                    <td>Order number</td>
                                    <td><?=$order['id']?></td>
                                </tr>
                                <tr>
                                    <td>Order date</td>
                                    <td><?=$order['date']?></td>
                                </tr>
                                <tr>
                                    <td>Order update</td>
                                    <td><?=$order['update_at']?></td>
                                </tr>
                                <tr>
                                    <td>Order products count</td>
                                    <td><?=count($order_products);?></td>
                                </tr>
                                <tr>
                                    <td>Order Sum</td>
                                    <td><?=$order['sum']; ?> <?=$order['currency']; ?></td>
                                </tr>
                                <tr>
                                    <td>Order number</td>
                                    <td><?=$order['name']?></td>
                                </tr>
                                <tr>
                                    <td>Order number</td>
                                    <td><?=$order['status'] ? 'done' : 'new'; ?></td>
                                </tr>
                                <tr>
                                    <td>Note</td>
                                    <td><?=$order['note']?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h3>Order details</h3>
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Count</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $qty = 0; foreach ($order_products as $product): ?>
                                    <tr>
                                        <td><?=$product->id; ?></td>
                                        <td><?=$product->title; ?></td>
                                        <td><?=$product->qty; $qty += $product->qty; ?></td>
                                        <td><?=$product->price; ?></td>
                                    </tr>
                                <?php endforeach;?>
                                    <tr class="active">
                                        <td colspan="2">
                                            <b>Total: </b>
                                        </td>
                                        <td>
                                           <b><?=$product->qty; ?></b>
                                        </td>
                                        <td>
                                           <b><?=$order['sum']; ?> <?=$order['currency']; ?></b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->