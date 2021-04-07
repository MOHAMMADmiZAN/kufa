<?php
require_once 'inc/header.php';
$servicesView = "SELECT  * FROM `services`";
if (isset($kufaDataBase)) {
    $servicesDataBaseQuery = $kufaDataBase->Query($servicesView);
    $kufaDataBase->close();

}

?>
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center my-3"> Services Information</h1>
                    <a href="#" style="float: right; color: green" data-toggle="modal" data-target="#modaldemo1"><i
                                class="fas fa-plus">ADD</i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <table class=" table table-bordered table-striped text-center table-info">
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Icon</th>
                            <th class="text-center">Details</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>


                        </tr>
                        <?php
                        if (isset($servicesDataBaseQuery)):
                            foreach ($servicesDataBaseQuery as $index => $services) { ?>
                                <tr>
                                    <td><?= ++$index ?></td>
                                    <td><?= $services['title'] ?></td>
                                    <td><i class="<?= $services['icon'] ?>"></i></td>
                                    <td><?= $services['details'] ?></td>
                                    <td><?php if ($services['status'] == 1) { ?>
                                            <a href="servicesStatus.php?id=<?= $services['id'] ?>"
                                               class="btn btn-success">ACTIVATE</a>
                                        <?php } else { ?>
                                            <a href="servicesStatus.php?id=<?= $services['id'] ?>"
                                               class="btn btn-warning">DEACTIVATE</a>
                                        <?php } ?>
                                    </td>
                                    <td><a href="" style="color: green;" data-id="<?= $services['id'] ?>"
                                           data-toggle="modal" data-target="#modaldemo3" class="resId">
                                            <i class="fas fa-edit" style="margin-top:15px;">EDIT</i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endif ?>

                    </table>
                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- modal -->
<div id="modaldemo1" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ADD NEW SERVICES</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <form action="servicesResponse.php" method="POST">
                    <div class="form-group">
                        <label for="s-name">Service Title</label>
                        <input type="text" id="s-name" placeholder="CREATIVE DESIGN" class="form-control" name="s-name"
                               required>
                        <label for="s-icon">Icon</label>
                        <select name="s-icon" id="s-icon" required class="form-control">
                            <option value>Select Icon</option>
                            <option value="fab fa-react">CREATIVE DESIGN</option>
                            <option value="fab fa-free-code-camp">UNLIMITED FEATURES</option>
                            <option value="fal fa-desktop">ULTRA RESPONSIVE</option>
                            <option value="fal fa-lightbulb-on">Creative Ideas</option>
                            <option value="fal fa-edit">Easy Customization</option>
                            <option value="fal fa-headset">SUPER SUPPORT</option>
                        </select>
                        <label for="s-text">Details</label>
                        <textarea type="text" id="s-text" class="form-control" placeholder="Type text" name="s-text"
                                  required></textarea>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Add New</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div><!-- modal-dialog -->
</div>
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update services Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
                <form action="servicesUpdate.php" method="POST">
                    <div class="form-group">
                        <label for="u-name">Service Title</label>
                        <input type="text" id="u-name" placeholder="CREATIVE DESIGN" class="form-control" name="u-name"
                               required>
                        <label for="u-icon">Icon</label>
                        <select name="u-icon" id="u-icon" required class="form-control">
                            <option value>Select Icon</option>
                            <option value="fab fa-react">CREATIVE DESIGN</option>
                            <option value="fab fa-free-code-camp">UNLIMITED FEATURES</option>
                            <option value="fal fa-desktop">ULTRA RESPONSIVE</option>
                            <option value="fal fa-lightbulb-on">Creative Ideas</option>
                            <option value="fal fa-edit">Easy Customization</option>
                            <option value="fal fa-headset">SUPER SUPPORT</option>
                        </select>
                        <label for="u-text">Details</label>
                        <textarea type="text" id="u-text" class="form-control" placeholder="Type text" name="u-text"
                                  required></textarea>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20 resultId" name="u-id" value="">Update Data
                            </button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </form>

            </div><!-- modal-body -->

        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->


<!-- sl-mainpanel -->


<?php
require_once 'inc/footer.php'
?>


