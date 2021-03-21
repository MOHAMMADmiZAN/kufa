<?php
require_once "inc/header.php";
$viewInbox = "SELECT * FROM `inbox` ORDER BY `id` DESC";
if (isset($kufaDataBase)) {
    $viewInboxQuery = $kufaDataBase->query($viewInbox);
    $kufaDataBase->close();
} else {
    echo 'database nai';
}
?>
<style>
    th {
        text-align: center;
    }

    .msg-bold {
        font-weight: 700;
        color: black;
    }
</style>
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-primary text-center mt-3" role="alert">
                        <h1>INBOX</h1>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <table class=" table table-bordered table-striped text-center table-info">
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>


                        </tr>
                        <?php
                        if (isset($viewInboxQuery)):
                            foreach ($viewInboxQuery as $index => $user) { ?>
                                <tr class="<?php if ($user['readStatus'] == 2) echo 'msg-bold' ?>">
                                    <td><?= ++$index ?></td>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= $user['message'] ?></td>
                                    <?php if ($user['readStatus'] == 2) { ?>
                                        <td><a href="inboxStatus.php?id=<?= $user['id'] ?>" type="button"
                                               class="btn btn-primary">Read</a></td>
                                    <?php } else { ?>
                                        <td><a href="inboxStatus.php?id=<?= $user['id'] ?>" type="button"
                                               class="btn btn-primary">Unread</a></td>
                                    <?php } ?>
                                    <td><a href="#" type="button" class="btn btn-warning">DELETE</a></td>

                                </tr>
                            <?php } endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<?php
require_once 'inc/footer.php';

?>
