<?php include 'includes/header.php';?>
<?php
if(!isset($_SESSION['id']))
{
    header('Location: login.php');
}
?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 max-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Edit Product Form</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-success text-center">
                            <?php echo isset($message) ? $message : ''; ?>
                        </h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $title; ?>" name="title" class="form-control" />
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Product Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file"/>
                                    <img src="<?php echo $image ?>" alt="" height="100" width="160">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="updateBtn" class="btn btn-outline-success btn-block" value="Update Product Info"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>


