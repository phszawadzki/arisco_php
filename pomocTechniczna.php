<?php $page='pomocTechniczna'?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    
<div id="root2" style="margin-top:75px;"></div>

<div  class="row pt-3 mb-5 content" style="min-height:350px">
    <div class="col-md-2" style="height:0px">
        <img style="width:100%" src="imgs/tlo_pTech1.jpg"/>
    </div>
    
    <div class="col-md-8" >	
        <div class="row mt-3" style="font-size: 34px; color: rgb(5,138,76); font-weight:600;">
            Wyślij zgłoszenie do Pomocy Technicznej
        </div>
        <div class="row mt-3 mb-3" style="font-size: 24px">
            W celu uzyskania pomocy technicznej dotyczącej naszych produktów, prosimy o przesłanie zgłoszenia drogą elektroniczną.
            Zgłoszenie przesłać można korzystając z przycisku dostępnego poniżej. Prosimy o podanie jak największej liczby szczegółów.
            Po zarejestrowaniu zgłoszenia, nasz pracownik skontaktuje się z Państwem, celem udzielenia pomocy w rozwiązaniu problemu.
        </div>
        
        <a class="green_buttony_link" href="formularzPomocTechniczna.php" style="font-size:2em">Wyślij zgłoszenie do pomocy technicznej</a>
        
        
        <div class="row mt-3" style="font-size: 34px; color: rgb(5,138,76); font-weight:600;">
            Zgłoszenie wysłane - co dalej?
        </div>


        <div>
            <br>
        Jeśli Państwa zgłoszenie zostało wysłane, prosimy oczekiwać na kontakt z konsultantem. Zgłoszenia obsługiwane są wg kolejności ich rejestracji.
Jeśli podczas rozmowy konsultant poprosi o zestawienie połączenia zdalnego, program do wykonania połączenia pobrać można, klikając w obrazek "Zdalna pomoc ARISCO".

W przypadku problemów z przesłaniem formularza drogą elektroniczną, poniżej zamieszczamy numery telefonów, dostępne w dni robocze w godzinach 8:00 - 16:00:
   telefon (42) 64 80 330

   fax (42) 64 80 302

Skontaktuj się z nami przy pomocy poczty elektronicznej: e-mail:    pomoc@arisco.pl

        </div>
    </div>
    
    <div class="col-md-2 hidden_on_mobile">
        <img style="width:100%;" src="imgs/tlo_pTech2.jpg"/>
    </div>
    
</div>
    
    
    
    
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
