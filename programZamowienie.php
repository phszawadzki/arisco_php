<?php 
$page='oferta'; 
$pageProgram='programZamowienie';
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
    
    
    
    <div class="container-fluid" style="max-width: 1520px">
    <div class="row mb-5" style="margin-top:10px">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">	
            <?php
                include 'includes/opisProgramu.php'; 
            ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="sekcja sticky_sekcja">
                <div class="tytul">Zamów program</div>
                Dla Państwa wygody sporządziliśmy prosty formularz zamówień gotowy do pobrania.
                Po jego wypełnieniu należy przesłać go faksem na numer 42 648 03 02. Każde przesłane zamówienie jest natychmiast realizowane, tak aby Państwo mogli otrzymać nasze oprogramowanie w możliwie jak najkrótszym czasie.
                Mamy nadzieję, że jakość i funkcjonalność oferowanych przez firmę Arisco programów spowodują Państwa częste wizyty na tej stronie.
                <br><br>
        
                <a href="http://www.arisco.pl/pobierz/5ee5605917626676f6a285fa4c10f7b0"><div><img src="/imgs/pdf.png" alt="pdf"/> 2019_-_Formularz_zamówienia_.pdf   </div></a>
            </div>  
                


            
        </div>
    </div>
    </div> 
    
    
    
    
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
