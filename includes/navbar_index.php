



<nav id="navbar" class="navbar navbar-dark navbar-expand-md justify-content-center navbar_index">    
    <div style="width:160px"><a href="index.php" class="navbar-brand mr-0" > <img src="imgs/arisco-trzydziestolecie.png" style=" height:30px;"/></a></div>
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item">
                <a class="first nav-link <?php if($page=='aktualnosci'){echo 'active_red';} ?>" href="aktualnosci.php" style="color:white !important">Aktualności</a>
            </li>
            <li class="nav-item">
                <a class="second nav-link <?php if($page=='oferta'){echo 'active_green';} ?>" href="oferta.php" style="color:white !important">Oferta</a>
            </li>
            <li class="nav-item">
                <a class="second nav-link <?php if($page=='szkolenia'){echo 'active_green';} ?>" href="szkolenia.php" style="color:white !important">Szkolenia</a> 
            </li>
            <li class="nav-item pomocTechniczna_1">
                <a class="second nav-link <?php if($page=='pomocTechniczna'){echo 'active_green';} ?>" href="pomocTechniczna.php" style="color:white !important">Pomoc techniczna</a> 
            </li>
            <li class="nav-item praca_1">
                <a class="second nav-link <?php if($page=='praca'){echo 'active_green';} ?>" href="praca.php" style="color:white !important">Praca</a> 
            </li>
            <li class="nav-item oNas_1">
                <a class="second nav-link <?php if($page=='oNas'){echo 'active_green';} ?>" href="oNas.php" style="color:white !important">O nas</a> 
            </li>
            <li class="nav-item kontakt_1">
                <a class="second nav-link <?php if($page=='kontakt'){echo 'active_green';} ?>" href="kontakt.php" style="color:white !important">Kontakt</a> 
            </li>
            <li class="nav-item dropdown my_dropdown1">
              <a class="nav-link  my_dropbtn11 my_dropbtn1" href="#" id="navbardrop" data-toggle="dropdown" style="color:white !important"> 
                INNE
                  <i class="fas fa-angle-down bounce inne_bouncing_arrow" style="color:white !important"></i>
              </a>
              <div class="dropdown-menu my_menu">
                <a class="dropdown-item kontakt_2" href="kontakt.php">KONTAKT</a>
                <a class="dropdown-item oNas_2" href="oNas.php">O NAS</a>
                <a class="dropdown-item praca_2" href="praca.php">PRACA</a>
                <a class="dropdown-item pomocTechniczna_2" href="pomocTechniczna.php">POMOC TECHNICZNA</a>
              </div>
            </li>
        </ul>
        <ul class="second  nav navbar-nav flex-row justify-content-center flex-nowrap text-center tvWidth" style="padding: 0; padding-top:3px">
            <a class="pomoc_zdalna" href="http://arisco.pl/pobierz/1706f191d760c78dfcec5012e43b6714"  style="color:white !important">Pomoc Zdalna  <img src="imgs/teamviewer.jpg" style="width:30px; height:30px;"/></a>
        </ul>
    </div>
</nav>