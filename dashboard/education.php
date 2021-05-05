<?php
require_once 'inc/header.php';
$education = "SELECT * FROM `education`";
if (isset($kufaDataBase)) {
    $educationQuery = $kufaDataBase->Query($education);
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

    .br-5 {
        border-radius: 5px;
    }
</style>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <a class="breadcrumb-item" href="index.php">Pages</a>
        <span class="breadcrumb-item active">Education</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row">
            <div class="col-lg-6">
                <div class="card bg-secondary br-5">
                    <div class="card-body">
                        <h2 class="fb text-center">EDUCATION DATA</h2>
                        <table id="myData" class="table table-secondary table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>DEGREE</th>
                                <th>PERCENT</th>
                                <th>YEAR</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($educationQuery)):
                                foreach ($educationQuery as $index => $education):
                                    ?>
                                    <tr>
                                        <td><?= $education['degree'] ?></td>
                                        <td><?= $education['percents'] ?>%</td>
                                        <td><?= $education['year'] ?></td>
                                        <td><a href="educationUpdate.php?deleteId=<?= $education['id'] ?>"
                                               class="btn btn-danger br-5">Delete</a></td>
                                    </tr>
                                <?php endforeach; endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <h2 class="fb text-center">Insert Education Data</h2>
                <form action="educationResponse.php" method="POST">
                    <div class="form-group">
                        <label for="degree">Degree</label>
                        <input type="text" id="degree" name="degree" class="form-control" placeholder="Type degree"
                               required>
                        <label for="percents">Percents</label>
                        <input type="text" id="percents" name="percents" class="form-control"
                               placeholder="Type percents" required>
                        <label for="date">Year</label>
                        <select name="date" id="date" class="form-control" required>
                            <option value=>Select Year</option>
                            <?php
                            $currentDate = date('Y');
                            $insertDate = range(1993, $currentDate);
                            if (isset($insertDate, $currentDate)):
                                foreach ($insertDate as $index => $date):
                                    ?>
                                    <option value="<?= $date ?>"><?= $date ?></option>
                                <?php endforeach; endif; ?>
                        </select>
                        <button type="submit" class="btn btn-primary w-100 form-control">Insert</button>
                    </div>


                </form>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->


<?php
require_once 'inc/footer.php';
?>
