<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Users list
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN; ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li>Users list</li>
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
                                <th>User login</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user):?>
                                <tr class="">
                                    <td><?=$user->id?></td>
                                    <td><?=$user->login?></td>
                                    <td><?=$user->email?></td>
                                    <td><?=$user->name?></td>
                                    <td><?=$user->role?></td>
                                    <td>
                                        <a href="<?=ADMIN;?>/user/edit?id=<?=$user->id?>"><i class="fa fa-fw fa-eye"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <p>(<?=count($users)?> order(s) of <?=$count;?>)</p>
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