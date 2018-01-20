<?php ?>
<?php require_once "../includes/layouts/header2.php" ?>
<br>
<div style="background: #eae8e8;">
    <div style="background: #fff;" class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1>Create A Course</h1>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="title"> Course Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <div class="form-group">
                        <label for="title"> Course Category <span class="require">*</span></label>
                        <select class="form-control" id="availability">
                            <option value="UnderConstruction">Under Construction</option>
                            <option value="ReadytoMove">Ready to Move</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Course Level <span class="require">*</span></label>
                        <select class="form-control" id="availability">
                            <option value="UnderConstruction">Beginner</option>
                            <option value="ReadytoMove">Intermediate</option>
                            <option value="ReadytoMove">Advance</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Course Requirement</label>
                        <textarea rows="5" class="form-control" name="description" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="description">What Will I learn?</label>
                        <textarea rows="5" class="form-control" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Course Description</label>
                        <textarea rows="5" class="form-control" name="description" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="description">Image For Course</label>
                        <form action="#">
                            <input type="file" name="pic" accept="image/*"><br>
                            <input type="submit">
                        </form>
                    </div>

                    <div class="form-group">
                        <button style="float: right; margin-bottom: 10px" type="button" class="btn btn-success btn-lg">Next</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>





