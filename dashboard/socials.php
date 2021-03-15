<?php
require_once 'inc/header.php';
$socialView = "SELECT  * FROM `socials`";
$socialData = "SELECT COUNT(*) FROM `socials`";
if (isset($kufaDataBase)) {
    $socialDataBaseQuery = $kufaDataBase->Query($socialView);
    $kufaDataBase->close();

}

?>
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center my-3"> Socials Information</h1>
                    <a href="#" style="float: right; color: green" data-toggle="modal" data-target="#modaldemo1"><i
                                class="fas fa-plus">ADD</i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <table class=" table table-bordered table-striped text-center table-info">
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Icon</th>
                            <th class="text-center">Link</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>


                        </tr>
                        <?php
                        if (isset($socialDataBaseQuery)):
                            foreach ($socialDataBaseQuery as $index => $social) { ?>
                                <tr>
                                    <td><?= ++$index ?></td>
                                    <td><?= $social['name'] ?></td>
                                    <td><i class="<?= $social['icon'] ?>"></i></td>
                                    <td><?= $social['link'] ?></td>
                                    <td><?php if ($social['status'] == 1) { ?>
                                            <a href="socialStatus.php?id=<?= $social['id'] ?>" class="btn btn-success">ACTIVATE</a>
                                        <?php } else { ?>
                                            <a href="socialStatus.php?id=<?= $social['id'] ?>" class="btn btn-warning">DEACTIVATE</a>
                                        <?php } ?>
                                    </td>
                                    <td><a href="" style="color: green;" data-id="<?= $social['id'] ?>"
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ADD NEW SOCIAL LINK</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <form action="socialResponse.php" method="POST">
                    <div class="form-group">
                        <label for="s-name">Social-Media Name</label>
                        <input type="text" id="s-name" placeholder="Facebook" class="form-control" name="s-name"
                               required>
                        <label for="s-icon">Icon</label>
                        <select name="s-icon" id="s-icon" required class="form-control">
                            <option value>Select Icon</option>
                            <option value="fab fa-facebook-f">Facebook</option>
                            <option value="fab fa-twitter">Twitter</option>
                            <option value="fab fa-linkedin-in">Linkedin</option>
                            <option value="fab fa-youtube">Youtube</option>
                            <option value="fab fa-pinterest-p">Pinterest</option>
                        </select>
                        <label for="s-link">Link</label>
                        <input type="text" id="s-link" class="form-control" placeholder="Type Link" name="s-link"
                               required>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update Social Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
                <form action="socialUpdate.php" method="POST">
                    <div class="form-group">
                        <label for="u-name">Social-Media Name</label>
                        <input type="text" id="u-name" placeholder="Facebook" class="form-control" name="u-name"
                               required>
                        <label for="u-icon">Icon</label>
                        <select name="u-icon" id="u-icon" required class="form-control">
                            <option value>Select Icon</option>
                            <option value="fab fa-facebook-f">Facebook</option>
                            <option value="fab fa-twitter">Twitter</option>
                            <option value="fab fa-linkedin-in">Linkedin</option>
                            <option value="fab fa-youtube">Youtube</option>
                            <option value="fab fa-pinterest-p">Pinterest</option>
                        </select>
                        <label for="u-link">Link</label>
                        <input type="text" id="u-link" class="form-control" placeholder="Type Link" name="u-link"
                               required>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20 resultId" name="u-id" value="">
                                Update data
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

