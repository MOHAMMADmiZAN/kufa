<?php
require_once 'inc/header.php';
$socialView = "SELECT * FROM `socials`";
if (isset($kufaDataBase)) {
    $socialDataBaseQuery = $kufaDataBase->Query($socialView);
    if ($socialDataBaseQuery) {
        echo "run";
    }
    $kufaDataBase->close();

}
?>
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center my-3"> Socials Information</h1>
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
                                </tr>
                            <?php } ?>
                        <?php endif ?>

                    </table>
                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->


<?php
require_once 'inc/footer.php'
?>
