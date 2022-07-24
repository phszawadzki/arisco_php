<div style="margin-top:65px"></div>
<div id="box">
    <select id="drugi-navbar-dropdown" onchange="location = this.value;">
        <option value="">Wybierz</option>
        <option value="program.php">Funkcje programu</option>
        <option value="programZamowienie.php">Zamówienie programu</option>
        <option value="programZapytaj.php">Zadaj pytanie</option>
        <option value="programDemo.php">Zamów wersję demo</option>
        <option value="programWymagania.php">Wymaganie systemowe</option>
    </select>
    <a class="minibutton <?php if($pageProgram=='program'){echo 'act';} ?>" href="program.php?programId=<?php echo $programId ?>" >Funkcje programu</a>
    <a class="minibutton1 <?php if($pageProgram=='programZamowienie'){echo 'act5';} ?>"  href="programZamowienie.php?programId=<?php echo $programId ?>">Zamówienie programu</a>
    <a class="minibutton1 <?php if($pageProgram=='programZapytaj'){echo 'act5';} ?>" href="programZapytaj.php?programId=<?php echo $programId ?>">Zadaj pytanie</a> 
    <a class="minibutton1 <?php if($pageProgram=='programDemo'){echo 'act5';} ?>" href="programDemo.php?programId=<?php echo $programId ?>">Zamów wersję demo</a>
    <a class="minibutton1 <?php if($pageProgram=='programWymagania'){echo 'act5';} ?>" href="programWymagania.php?programId=<?php echo $programId ?>">Wymaganie systemowe</a>
    
    <button type="button" class="btn btn-primary my-dropbtn2" data-toggle="modal" data-target="#myModal">
        ZAMÓW
    </button>
</div> 