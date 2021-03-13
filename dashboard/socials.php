<?php
require_once 'inc/header.php';
$socialView = "SELECT * FROM `socials`";
if (isset($socialDataBase)) {
    $socialDataBaseQuery = $socialDataBase->Query($socialView);
    if ($socialDataBaseQuery) {
        echo "run";
    }
    $socialDataBase->close();

}
?>
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Socials Information</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <table class=" table table-bordered table-striped text-center table-info">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Icon</th>
                            <th>Link</th>
                            <th>Status</th>

                        </tr>
                        <?php
                        if (isset($socialDataBaseQuery)):
                            foreach ($socialDataBaseQuery as $index => $social) { ?>
                                <tr>
                                    <td><?= ++$index ?></td>
                                    <td><?= $social['name'] ?></td>
                                    <td><i class="<?= $social['icon'] ?>"></i></td>
                                    <td><?= $social['link'] ?></td>
                                    <td><a data-id="<?= $social['id'] ?>" type="button"
                                           class="btn btn-warning temporaryDelete">Deactivate</a></td>
                                </tr>
                            <?php } endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->


<?php
require_once 'inc/footer.php'
?>
