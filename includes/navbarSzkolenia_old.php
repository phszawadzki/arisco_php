<div style="margin-top:65px"></div>
<div id="box">
    <select id="drugi-navbar-dropdown" onchange="location = this.value;">
        <option value="">Wybierz</option>
        <option value="szkolenia.php">Kalendarz szkoleń</option>
        <option value="szkoleniaPrezentacje.php">Kalendarz prezentacji</option>
        <option value="szkoleniaZglos.php">Brak szkolenia? Zgłoś nam</option>
        <option value="szkoleniaDojazd.php">Dojazd na szkolenia</option>
    </select>
    <a class="minibutton <?php if($pageSzkolenia=='szkolenia'){echo 'act';} ?>" href="szkolenia.php" onClick="">Kalendarz szkoleń</a>
    <a class="minibutton1 <?php if($pageSzkolenia=='szkoleniaPrezentacje'){echo 'act5';} ?>" href="szkoleniaPrezentacje.php" onClick="">Kalendarz prezentacji</a>
    <a class="minibutton1 <?php if($pageSzkolenia=='szkoleniaZglos'){echo 'act5';} ?>" href="szkoleniaZglos.php" onClick="">Brak szkolenia? Zgłoś nam</a> 
    <a class="minibutton1 <?php if($pageSzkolenia=='szkoleniaDojazd'){echo 'act5';} ?>" href="szkoleniaDojazd.php" onClick="">Dojazd na szkolenia</a>
</div>