<div style="margin-top:45px"></div>
<nav id="navbar2" class="navbar navbar-light navbar-expand-md justify-content-center" style="background-color: white;">    
<!--    <div style="width:160px"><a href="index.php" class="navbar-brand mr-0" > <img src="imgs/arisco-trzydziestolecie.png" style=" height:30px;"/></a></div>-->
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item">
                <a class="first nav-link <?php if($pageProgram=='program'){echo 'active_red';} ?>" href="program.php?programId=<?php echo $programId ?>">Funkcje programu</a>
            </li>
            <li class="nav-item">
                <a class="second nav-link <?php if($pageProgram=='programZamowienie'){echo 'active_green';} ?>" href="programZamowienie.php?programId=<?php echo $programId ?>">Zamówienie programu</a>
            </li>
            <li class="nav-item">
                <a class="second nav-link <?php if($pageProgram=='programZapytaj'){echo 'active_green';} ?>" href="programZapytaj.php?programId=<?php echo $programId ?>">Zadaj pytanie</a> 
            </li>
            <li class="nav-item pomocTechniczna_1">
                <a class="second nav-link <?php if($pageProgram=='programDemo'){echo 'active_green';} ?>" href="programDemo.php?programId=<?php echo $programId ?>">Zamów wersję demo</a> 
            </li>
            <li class="nav-item pomocTechniczna_1">
                <a class="second nav-link <?php if($pageProgram=='programWymagania'){echo 'active_green';} ?>" href="programWymagania.php?programId=<?php echo $programId ?>">Wymaganie systemowe</a> 
            </li>
            
<!--
            <li class="nav-item dropdown my_dropdown1">
              <a class="nav-link  my_dropbtn11 my_dropbtn1" href="#" id="navbardrop" data-toggle="dropdown"> 
                INNE
                  <i class="fas fa-angle-down bounce inne_bouncing_arrow"></i>
              </a>
              <div class="dropdown-menu my_menu">
                <a class="dropdown-item kontakt_2" href="kontakt.php">KONTAKT</a>
                <a class="dropdown-item oNas_2" href="oNas.php">O NAS</a>
                <a class="dropdown-item praca_2" href="praca.php">PRACA</a>
                <a class="dropdown-item pomocTechniczna_2" href="pomocTechniczna.php">POMOC TECHNICZNA</a>
              </div>
            </li>
-->
        </ul>
<!--
        <ul class="second  nav navbar-nav flex-row justify-content-center flex-nowrap text-center tvWidth" style="padding: 0; padding-top:3px">
            <a class="pomoc_zdalna" href="http://arisco.pl/pobierz/1706f191d760c78dfcec5012e43b6714">Pomoc Zdalna  <img src="imgs/teamviewer.jpg" style="width:30px; height:30px;"/></a>
        </ul>
-->
    </div>
</nav>