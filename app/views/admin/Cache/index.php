<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Cache manage
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN; ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li>Cache manage</li>
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
                                <th>Cache name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>Category cache</td>
                                    <td>Menu categories, cached on 1 hour</td>
                                    <td>
                                        <a class="delete" href="<?=ADMIN;?>/cache/delete?key=category"><i class="fa fa-fw fa-close text-danger"></i></a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>Filters cache</td>
                                    <td>Category page filters and filter groups, cached on 1 hour</td>
                                    <td>
                                        <a class="delete" href="<?=ADMIN;?>/cache/delete?key=filter"><i class="fa fa-fw fa-close text-danger"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->