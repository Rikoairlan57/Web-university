<?php include("includes/header.php"); ?>

<body>
<?php include("includes/navbar2.php"); ?>

    <div class="container kontak">

        <h3 class="mb-4">Contack Us</h3>
        <form action="">
            <div class="formKontakKiri">
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="nama">
                </div>

                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="email" class="form-control" id="nama">
                </div>

                <div class="form-group">
                    <label for="nama">No Phone</label>
                    <input type="number" class="form-control" id="nama">
                </div>
            </div>


            <div class="formKontakKanan">
                <div class="form-group">
                    <label for="pesan">message</label>
                    <textarea name="pesan" id="pesan" cols="30" rows="8" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary float-right">Send</button>
            </div>
        </form>
    </div>



    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d24930.232636042034!2d-90.3042444859359!3d38.642462864770714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1swashington%20university!5e0!3m2!1sid!2sid!4v1636616637966!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>





    <!-- sosmed icon -->
    <?php include("includes/sosmed.php"); ?>

    <!-- footer -->
    <?php include("includes/footer.php"); ?>