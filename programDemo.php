<?php 
$page='oferta'; 
$pageProgram='programDemo';
$programId = $_GET["programId"];
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php include "includes/navbarProgram.php" ?>
    <?php include "includes/zamow_modal.php" ?>
    <?php include "includes/wyswietl_modala.php" ?>
    
    
    
    <div class="container-fluid" style="max-width: 1520px">
    <div class="row mb-5" style="margin-top:10px">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">	
            <?php                
                include 'includes/opisProgramu.php'; 
            ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="sekcja sticky_sekcja">
                <div class="tytul">Zamów Demo</div>

                
W celu otrzymania wersji DEMO prosimy o kontakt z Działem Sprzedaży pod numerem telefonu 42 648 03 25.
            </div>
        </div>
    </div>
    </div> 
    
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
