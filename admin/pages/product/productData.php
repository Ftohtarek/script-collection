<?php include '../shardFile/header.php' ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Product DataTable </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Catogery Id</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td> wlaaa<td>
                    </td>
                    <td>22</td>
                    <td>male</td>
                    <td class="d-flex border-0">
                        <button name="updata" class="btn btn-warning w-50 mx-1">upd</button>
                        <button name="delete" class="btn btn-danger w-50 mx-1">del</button>
                    </td>

                </tr>

            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Catogery Id</th>
                    <th></th>
                </tr>
            </tfoot>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php include '../shardFile/footer.php' ?>