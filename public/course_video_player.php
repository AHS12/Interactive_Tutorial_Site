<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lecture Title</title>

    <!-- Bootstrap core CSS -->
    <link href="../lib/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style/videoplayer.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Tutorial Name
                </a>
            </li>
            <li>
                <a href="#">video1</a>
            </li>
            <li>
                <a href="#">video2</a>
            </li>
            <li>
                <a href="#">video3</a>
            </li>
            <li>
                <a href="#">video4</a>
            </li>
            <li>
                <a href="#">video5</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div>
            <a href="#menu-toggle" class="btn btn-success" id="menu-toggle">Course Playlist</a>
        </div>
        <div class="container text-center">

            <h1>Tutorial Title</h1>
            <h3>Lecture Title</h3>  <br>
            <hr>

            <div style="max-width: 700px;
                        max-height: 400px;
                        margin-right: auto;
                        margin-left: auto;">
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls loop autoplay class="embed-responsive-item">
                        <source src="videos/video2.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>


        <hr>

        <div class=" container text-center">

            <h3>Lecture Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda, consectetur debitis
                distinctio fugit illum in inventore magni nisi nulla obcaecati quae quidem quos, suscipit, ullam vitae
                voluptatem voluptatum? Cum.</p>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="../lib/jquery-3.2.1.min.js"></script>
<script src="../lib/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
