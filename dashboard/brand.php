<?php
require_once 'inc/header.php';
$brandView = "SELECT * FROM `brands`";
if (isset($kufaDataBase)) {
    $brandViewDataBaseQuery = $kufaDataBase->Query($brandView);
    $kufaDataBase->close();

}
?>
<style>
    th, td {
        text-align: center;
    }

    .font-black {
        color: black;
        font-weight: bold;
    }

    .b-r {
        border-radius: 5px;
    }
</style>
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <a class="breadcrumb-item" href="index.php">Pages</a>
        <span class="breadcrumb-item active">Brand View Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row">
            <div class="col-lg-6">
                <div class="card bg-secondary b-r">
                    <div class="card-body p-3">
                        <h1 class="alert-primary b-r text-center p-2">Brand Logos</h1>
                        <table class="table table-primary table-striped table-bordered b-r">

                            <tr>
                                <th>SL</th>
                                <th>Brand</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if (isset($brandViewDataBaseQuery)):
                                foreach ($brandViewDataBaseQuery as $index => $brand): ?>
                                    <tr>
                                        <td><?= ++$index; ?></td>
                                        <td><img src="upload/brand/<?= $brand['images'] ?>"
                                                 alt="<?= $brand['images'] ?>">
                                        </td>
                                        <td><a class=" btn btn-warning b-r brandDelete"
                                               data-id="<?= $brand['id'] ?>">Delete</a></td>
                                        <td><a href="brandDelete.php?userId=<?= $brand['id'] ?>"
                                               class="btn btn-danger b-r">Delete</a></td>
                                    </tr>
                                <?php endforeach;
                            endif;
                            ?>

                        </table>
                    </div>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="card  bg-secondary b-r ">
                    <div class="card-body w-100 p-2">
                        <form action="brandResponse.php" method="POST" enctype="multipart/form-data">
                            <?php if (isset($_SESSION["imgInsert"])): ?>
                                <div class="alert alert-danger text-center b-r">
                                    <?php echo $_SESSION["imgInsert"];
                                    unset($_SESSION["imgInsert"]); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($_SESSION["supportedExtension"])): ?>
                                <div class="alert alert-danger text-center b-r">
                                    <?php echo $_SESSION["supportedExtension"];
                                    unset($_SESSION["supportedExtension"]); ?>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label for="image" class="font-black">Image Upload</label>
                                <input type="file" id="image" class="form-control" name="image">
                                <button type="submit" class="btn btn-primary w-100 form-control"
                                        name="Insert">
                                    Insert
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
<?php
require_once "inc/footer.php";
?>

