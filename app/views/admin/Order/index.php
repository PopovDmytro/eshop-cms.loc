<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Orders list
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN; ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li>Orders list</li>
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
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer name</th>
                                    <th>Order status</th>
                                    <th>Total price</th>
                                    <th>Create data</th>
                                    <th>Update date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($orders as $order):?>
                                <?php $class = $order['status'] ? 'success' : ''?>
                                <tr class="<?=$class?>">
                                    <td><?=$order['id']?></td>
                                    <td><?=$order['name']?></td>
                                    <td><?=$order['status'] ? 'Done' : 'New'; ?></td>
                                    <td><?=$order['sum']?> <?=$order['currency']?> </td>
                                    <td><?=$order['date']?></td>
                                    <td><?=$order['update_at']?></td>
                                    <td>
                                        <a href="<?=ADMIN;?>/order/view?id=<?=$order['id']?>"><i class="fa fa-fw fa-eye"></i></a>
                                        <a class="text-danger delete" href="<?=ADMIN;?>/order/delete?id=<?=$order['id']?>"><i class="fa fa-fw fa-close"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <p>(<?=count($orders)?> order(s) of <?=$count;?>)</p>
                        <?php if($pagination->countPages > 1):?>
                            <?=$pagination;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->