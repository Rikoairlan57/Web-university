<?php include("includes/header.php"); ?>

<body>

<?php include("includes/navbar2.php"); ?>

    <div class="title">
        <h1 class="text-center">Gallery</h1>
        <!-- <p class="text-center">Choose The Category To See Our Galery</p> -->
    </div>

    <div class="container">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Image</th>
                    <th>category</th>
                    <th>Option</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><img width="100" height="50" src="images/galery/2.jpg" alt=""></td>
                    <td>BasketBall</td>
                    <td><a href="singleGalery.php" class="btn btn-primary">View More</a></td>
                </tr>


                <tr>
                    <td><img width="100" height="50" src="images/galery/13.jpg" alt=""></td>
                    <td>Rugby</td>
                    <td><a href="singleGalery.php" class="btn btn-primary">View More</a></td>
                </tr>

                <tr>
                    <td><img width="100" height="50" src="images/galery/8.jpg" alt=""></td>
                    <td>Town</td>
                    <td><a href="singleGalery.php" class="btn btn-primary">View More</a></td>
                </tr>

                <tr>
                    <td><img width="100" height="50" src="images/galery/12.jpg" alt=""></td>
                    <td>Library</td>
                    <td><a href="singleGalery.php" class="btn btn-primary">View More</a></td>
                </tr>

                <tr>
                    <td><img width="100" height="50" src="images/galery/4.jpg" alt=""></td>
                    <td>Stadium</td>
                    <td><a href="singleGalery.php" class="btn btn-primary">View More</a></td>
                </tr>


                <tr>
                    <td><img width="100" height="50" src="images/galery/9.jpg" alt=""></td>
                    <td>View</td>
                    <td><a href="singleGalery.php" class="btn btn-primary">View More</a></td>
                </tr>
            </tbody>
        </table>
    </div>



    <!-- sosmed icon -->
    <?php include("includes/sosmed.php"); ?>

    <!-- footer -->

    <?php include("includes/footer.php"); ?>