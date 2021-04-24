<?php
require_once 'inc/header.php';
$feedBackSelect = "SELECT * FROM `testimonials` ";
if (isset($kufaDataBase, $feedBackSelect)) {
    $feedBackSelectQuery = $kufaDataBase->query($feedBackSelect);
} else {
    echo "feedback error";
}
?>
    <style>
        th {
            text-align: center;
        }
    </style>
    <!--    !-- ########## START: MAIN PANEL ########## -->-->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.php">Starlight</a>
            <a class="breadcrumb-item" href="index.php">Pages</a>
            <span class="breadcrumb-item active">Testimonial Page</span>
        </nav>

        <div class="sl-pagebody">

            <div class="row">
                <div class="col-lg-8">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <h1 class="text-uppercase text-center text-info">testimonial Data</h1>
                            <table id="myData" class="table table-primary table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Designation</th>
                                    <th>Feedback</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($feedBackSelectQuery)): foreach ($feedBackSelectQuery as $index => $feedback): ?>
                                    <tr>
                                        <td><?= ++$index ?></td>
                                        <td><?= $feedback['name'] ?></td>
                                        <td><img src="upload/feedback/<?= $feedback['image'] ?>"
                                                 alt="<?= $feedback['image'] ?>" width="50px" height="50px"></td>
                                        <td><?= $feedback['designation'] ?></td>
                                        <td><?= $feedback['feedback'] ?></td>
                                        <td><a href="testimonialDelete.php?userId=<?= $feedback['id'] ?>"
                                               class="btn btn-danger">Delete</a></td>
                                    </tr>

                                <?php endforeach; endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h1 class="text-center text-uppercase">Insert Data</h1>
                    <form action="testimonialResponse.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" id="name" placeholder="Type Name" name="name">
                            <label for="designation"></label>
                            <input type="text" class="form-control" id="designation" placeholder="Type Designation"
                                   name="designation">
                            <label for="feedback"></label>
                            <input type="text" class="form-control" id="feedback" placeholder="Type Feedback"
                                   name="feedback">
                            <label for="image"></label>
                            <input type="file" class="form-control" id="image" placeholder="Upload Your Image"
                                   name="image">
                            <button type="submit" class="btn btn-primary w-100 text-center">Insert</button>


                        </div>

                    </form>
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php
require_once "inc/footer.php";
?>