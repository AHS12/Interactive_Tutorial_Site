<?php require_once "../includes/layouts/header2.php" ?>
<br>
<div class="container">
    <div class="container" style="margin-left: 0;">
        <div class="row" style="padding:5px;">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../style/pictures/dash_publish_illustration.png" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <h4 style="padding-left: 10px;"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> Name of the course</h4>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <a href="#" class="btn btn-primary" style="width: 150px; float: right;padding-left: 20px;">
                    <i class="fa fa-cog" aria-hidden="true"></i> Course Srtting
                </a>
            </div>
        </div>

    </div>
    <hr>

    <!-- side bar processs start -->
    <div class="container" style="margin-left: 0;">
        <div class="col-sm-2">
            <nav class="nav-sidebar">
                <ul class="nav tabs">
                    <li class="#"><a href="page1.html">Course Goal</a></li>
                    <li class=""><a href="page2.html">Curriculum</a></li>
                    <li class=""><a href="page3.html">Course landing page</a></li>
                    <li class=""><a href="page4.html">Price & Coupons</a></li>
                    <li class=""><a href="page5.html">Captions</a></li>
                    <li class=""><a href="page6.html">Automatic Message</a></li>
                </ul>
                <a href="#" class="btn btn-danger">Submit for review</a>
            </nav>
            <!-- <div><h2 class="add">Place for your add!</h2></div> -->
        </div>
        <!-- tab content -->
        <div class="tab-content" style="background: #fff;">
            <div class="tab-pane active text-style" id="tab1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <hr style="width: 100%;margin-top: 2px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Create post</h2>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-primary" style="float: right;margin-top: 15px;">Save</a>
                                </div>
                            </div>
                            <hr style="width: 100%">


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
                        <div class="col-md-4" style="margin-left: 5px;">

                            <h2>Lorem ipsum lorem ipsum</h2>
                            <p>Whether you've been teaching for years or are teaching for the first time, you can make an engaging course. We've compiled resources and best practices to help you get to the next level, no matter where you're starting.</p>
                            <a href="#">View Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="tab-pane text-style" id="tab2">
              <h2>Dolor asit amet</h2>
               <p>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua.</p>
                <hr>
                      <img src="http://placehold.it/150x90" class="img-rounded pull-left">
            </div>
            <div class="tab-pane text-style" id="tab3">
              <h2>Stet clita</h2>
              <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum
                iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
                <hr>
                <div class="col-xs-6 col-md-3">
                  <img src="http://placehold.it/150x150" class="img-rounded pull-right">
              </div>
            </div> -->
        </div>


    </div>
    <!-- side bar process end -->

</div>