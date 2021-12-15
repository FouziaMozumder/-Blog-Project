<?php include 'includes/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 max-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Manage Blog</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product){extract($product) ;?>
                            <tr>
                                <td><?php echo$title; ?></td>
                                <td><?php echo$description; ?></td>
                                <td><img src="<?php echo $image; ?>" alt="" height="50" width="90" </td>
                                <td>
                                    <a href="action.php?status=edit&id=<?php echo $id; ?>" class="btn btn-outline-success">Edit</a>
                                    <a href="action.php?status=delete&id=<?php echo $id; ?>" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>


