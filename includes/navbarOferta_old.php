<div style="margin-top:65px"></div>

<div id="box" class="mb-2">
    <select id="drugi-navbar-dropdown" onchange="location = this.value;">
        <option value="">Wybierz</option>
        <option value="oferta.php">Wszystkie</option>
        <option value="ofertaAdministracja.php">Pakiet Administracja</option>
        <option value="ofertaOchrona.php">Pakiet Ochrona Środowiska</option>
        <option value="ofertaObieg.php">Pakiet Obieg Dokumentów</option>
        <option value="ofertaDedykowane.php">Oprogramowanie Dedykowane</option>
        <option value="ofertaStrony.php">Tworzenie Stron Internetowych</option>        
    </select>

    <a class="minibutton <?php if($pageOferta=='wszystkie'){echo 'act';} ?>" href="oferta.php" onClick="">Wszystkie</a>
    <a class="minibutton1 <?php if($pageOferta=='administracja'){echo 'act1';} ?>"  href="ofertaAdministracja.php" onClick="">Pakiet Administracja</a>
    <a class="minibutton1 <?php if($pageOferta=='ochrona'){echo 'act2';} ?>" href="ofertaOchrona.php" onClick="">Pakiet Ochrona Środowiska</a> 
    <a class="minibutton1 <?php if($pageOferta=='obieg'){echo 'act3';} ?>" href="ofertaObieg.php" onClick="">Pakiet Obieg Dokumentów</a>
    <a class="minibutton1 <?php if($pageOferta=='dedykowane'){echo 'act4';} ?>" href="ofertaDedykowane.php" onClick="">Oprogramowanie Dedykowane</a>
    <a class="minibutton1 <?php if($pageOferta=='strony'){echo 'act5';} ?>" href="ofertaStrony.php" onClick="">Tworzenie Stron Internetowych</a>   


    <button type="button" class="btn btn-primary my-dropbtn2" data-toggle="modal" data-target="#myModal">
        ZAMÓW
    </button>
</div>


<?php include "includes/zamow_modal.php" ?>