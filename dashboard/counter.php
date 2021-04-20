<?php
require_once 'inc/header.php';
$counterView = "SELECT * FROM `counters`";
if (isset($kufaDataBase)) {
    $counterViewDataBaseQuery = $kufaDataBase->Query($counterView);
    $kufaDataBase->close();

}
?>
<style>
    th,td {
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
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <a class="breadcrumb-item" href="index.php">Pages</a>
        <span class="breadcrumb-item active">Counter</span>
    </nav>

    <div class="sl-pagebody">
        <h1 class="text-center">Counter Section</h1>
        <div class="row">
            <div class="col-lg-7">
                <div class="card bg-info">
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-secondary">
                            <tr>
                                <th>SL</th>
                                <th>Icon</th>
                                <th>Number</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>

                            <?php if (isset($counterViewDataBaseQuery)):
                                foreach ($counterViewDataBaseQuery as $index => $counter):?>
                                    <tr>
                                        <td><?= ++$index ?></td>
                                        <td><i class="<?= $counter['icon'] ?>"></i></td>
                                        <td><?= $counter['number'] ?></td>
                                        <td><?= $counter['title'] ?></td>
                                        <td><a href="" style="color: green;" data-id="<?= $counter['id'] ?>"
                                               data-toggle="modal" data-target="#modaldemo3" class="resId">
                                                <i class="fas fa-edit">Edit</i></a></td>
                                    </tr>
                                <?php
                                endforeach;
                            endif;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <form action="counterResponse.php" method="POST">
                            <div class="form-group">
                                <label for="icon"><a class="d-block font-black" href="//fontawesome.com/icons"
                                                     target="_blank">Icon:</a></label>
                                <input type="text" id="icon" name="icon" placeholder=" ex: fas-fa-icon"
                                       class="form-control b-r">
                                <label for="number"><span class="font-black ">Number:</span></label>
                                <input type="text" id="number" name="number" placeholder=" ex: 00120"
                                       class="form-control b-r">
                                <label for="title"><span class="font-black ">Title:</span></label>
                                <input type="text" id="title" name="title" placeholder=" ex: Title"
                                       class="form-control b-r">
                                <button type="submit" class="btn btn-primary w-100 mt-2">Insert</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update counter Data</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pd-20">
                        <form action="counterUpdate.php" method="POST">
                            <div class="form-group">
                                <label for="icon"><a class="d-block font-black" href="//fontawesome.com/icons"
                                                     target="_blank">Icon:</a></label>
                                <input type="text" id="icon" name="u-icon" placeholder=" ex: fas-fa-icon"
                                       class="form-control b-r">
                                <label for="number"><span class="font-black ">Number:</span></label>
                                <input type="text" id="number" name="u-number" placeholder=" ex: 00120"
                                       class="form-control b-r">
                                <label for="title"><span class="font-black ">Title:</span></label>
                                <input type="text" id="title" name="u-title" placeholder=" ex: Title"
                                       class="form-control b-r">
                                <button type="submit" class="btn btn-primary w-100 mt-2 resultId" value="" name="u-id">Update</button>
                            </div>
                        </form>

                    </div><!-- modal-body -->

                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
<?php
require_once "inc/footer.php";
?>

