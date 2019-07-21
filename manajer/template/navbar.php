<div class="row mb-5">
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="./index.php">
    <img src="pertamina.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Keagenan Elpiji PT. Pertamina (Persero) Marketing Operation Region III
  </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php $url = Helpers::getCurrentPage(); ?>


                    <li class="nav-item <?= $url == 'penilaian' ? 'active' : '' ?>">
                        <a class="nav-link" href="penilaian.php">Penilaian</a>
                    </li>
                    <li class="nav-item <?= $url == 'hasil' ? 'active' : '' ?>">
                        <a class="nav-link" href="hasil.php">Hasil</a>
                    </li>
                    <li class="nav-item <?= $url == 'index' ? 'active' : '' ?>">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="row">
    <div class="container" id="content">
