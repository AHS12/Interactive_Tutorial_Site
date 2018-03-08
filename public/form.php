<?php include "../includes/layouts/header2.php"; ?>

<div class="container">
    <h2>Accordion Example</h2>
    <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr class="help-block">
                        <th>row</th>
                        <th>row2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ami</td>
                        <td>tumi</td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <form action="../admin/categories.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="cat_title">Add Category</label>
                        <input class="form-control" type="text" name="cat_title" title="Entercategory"/>
                    </div>
                    <div class="form-group">

                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category"/>
                    </div>
                </form>
            </div>
        </div>

</div>
<?php include "../includes/layouts/footer.php"?>