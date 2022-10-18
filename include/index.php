<section id="carousel-item">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="carousel/c1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="carousel/c2.jpg" class=" d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="carousel/c3.jpg" class=" d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="carousel/c4.jpg" class=" d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="carousel/c5.jpg" class=" d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<?php
    $sql_k = "  SELECT `judul`,`isi` 
                FROM `konten` 
                WHERE `id_konten`='1'";
    $query_k = mysqli_query($koneksi,$sql_k);
    while($data_k = mysqli_fetch_row($query_k)){
        $judul_konten = $data_k[0];
        $isi_konten = $data_k[1];
    }
?>
<section id="notes-item">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    <span class="text-muted"><?php echo $judul_konten; ?></span>
                </h2>
                <p class="lead">
                    <?php echo $isi_konten; ?>
                </p>
            </div>
            <div class="col-md-5">
                <img src="images/fastfood1.png" class="img-fluid mx-auto featurette-image">
                <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
</section><!-- #notes-item -->
<section id="quotes-item" class="bg-light" style="min-height: 50px;padding:30px 0px 0px 0px;">
    <div class="container">
        <blockquote class="blockquote text-center">
            <p class="mb-0">Hidup seperti secangkir kopi, dimana pahit dan manis bertemu dalam kehangantan</p>
            <footer class="blockquote-footer pb-4">Keluarga Fantastic TI 4B <cite title="Source Title">Penikmat Coffee</cite>
            </footer>
        </blockquote>
    </div>
</section><br><br>