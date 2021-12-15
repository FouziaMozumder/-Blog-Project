<?php include 'includes/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 max-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product){extract($product) ;?>
                                <tr>
                                    <td><?php echo$name; ?></td>
                                    <td><?php echo$email; ?></td>
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


