<?php
require_once 'inc/header.php';
$categories = "SELECT * FROM `categories`";
$portfolios = "SELECT * FROM `portfolios` INNER JOIN categories ON portfolios.categories_id = categories.id";
if (isset($kufaDataBase)) {
    $categoriesQuery = $kufaDataBase->Query($categories);
    $portfoliosQuery = $kufaDataBase->Query($portfolios);
}
?>

<style>
    .fb {
        color: black;
        margin-top: 5px;
    }

    th, td {
        text-align: center;
    }
</style>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <a class="breadcrumb-item" href="index.php">Pages</a>
        <span class="breadcrumb-item active">Portfolio Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h1 class="text-uppercase text-center text-info">Portfolio Data</h1>
                        <table id="myData" class="table table-primary table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Categories</th>
                                <th>Text</th>
                                <th>Thumbnail</th>
                                <th>Features</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($portfoliosQuery)):
                                foreach ($portfoliosQuery as $index => $portfolio):
                                    ?>
                                    <tr>
                                        <td><?= ++$index ?></td>
                                        <td><?= $portfolio['name'] ?></td>
                                        <td><?= $portfolio['c_name'] ?></td>
                                        <td><?= $portfolio['body'] ?></td>
                                        <td><img src="upload/portfolio/thumbnail/<?= $portfolio['thumbnail'] ?>"
                                                 alt="<?= $portfolio['thumbnail'] ?>" width="80" height="80">
                                        </td>
                                        <td><img src="upload/portfolio/feature/<?= $portfolio['feature'] ?>"
                                                 alt="<?= $portfolio['feature'] ?>" width="80" height="80">
                                        </td>
                                        <td><a href="portfolioDelete.php?userId=<?=$portfolio['portfolio_ID']?>" class="btn btn-warning">Delete</a></td>
                                    </tr>
                                <?php endforeach; endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center text-uppercase">Insert Data</h1>
                        <form action="portfolioResponse.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="fb">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Type Name" name="name">
                                <label for="categories" class="fb"><a href="" data-toggle="modal"
                                                                      data-target="#modaldemo1"
                                                                      class="fb">Categories:</a></label>
                                <select name="categories" id="categories" class="form-control">
                                    <option value=>Select Category</option>
                                    <?php if (isset($categoriesQuery)):
                                        foreach ($categoriesQuery as $index => $category):
                                            ?>
                                            <option value="<?= $category['id'] ?>"><?= $category['c_name'] ?></option>
                                        <?php endforeach; endif; ?>
                                </select>
                                <label for="cktext" class="fb">Text:</label>
                                <textarea name="text" id="cktext" cols="30" rows="10" class="form-control"></textarea>
                                <label for="thumbnail" class="fb">Thumbnail:</label>
                                <input type="file" class="form-control" id="thumbnail" placeholder="Upload Your Image"
                                       name="thumbnail">
                                <label for="feature" class="fb">Feature:</label>
                                <input type="file" class="form-control" id="feature" placeholder="Upload Your Image"
                                       name="feature">
                                <button type="submit" class="btn btn-primary w-100 text-center">Insert</button>
                            </div>

                        </form>
                        <div id="modaldemo1" class="modal fade">
                            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                                <div class="modal-content bd-0 tx-14">
                                    <div class="modal-header pd-y-20 pd-x-25">
                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ADD NEW CATEGORY
                                        </h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body pd-25">
                                        <form action="portfolioCategoryResponse.php" method="POST">
                                            <div class="form-group">
                                                <label for="c-name">Categories Name</label>
                                                <input type="text" id="c-name" placeholder="Category"
                                                       class="form-control" name="c-name"
                                                       required>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-info pd-x-20">Add New</button>
                                                    <button type="button" class="btn btn-secondary pd-x-20"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div><!-- modal-dialog -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->


<?php require_once 'inc/footer.php'; ?>
