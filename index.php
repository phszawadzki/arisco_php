



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/head.php";
       include_once($path);
    ?>
   
    <style>
        body {
            height: 100%;
            margin: 0;
        }
        .indexbg {
            background-image: url("imgs/bg.jpg");
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar_index.php'; ?>

    <div class="row indexbg">
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 order-md-2" style="padding-right: 0px;">
            <div id="indexScrollable" class="sekcja index_pomoc" >
                <div id="oneTytul" class="tytul">Pomoc techniczna</div>

                <div class="tresc" style="overflow-y:auto;">
                    <span id="oneData" class="data"></span>
                    <span id="oneTresc">W celu uzyskania pomocy technicznej dotyczącej naszych produktów, prosimy o przesłanie zgłoszenia.<br><br>

                    Sugerujemy, aby zgłoszenia wysyłać z poziomu aplikacji Arisco (Menu "Pomoc" -> "Wyślij zgłoszenie do pomocy technicznej").<br>
                    <div  class="button_container pt-2 pb-2">
                        <a  id="zgloszenieButton1" href="http://www.arisco.pl/pobierz/f514cec81cb148559cf475e7426eed5e" class="green_buttony_link2" style="font-size:16px">Jak przesłać zgłoszenie z poziomu programu?</a>
                    </div>

                    Jeżeli z przyczyn technicznych nie ma możliwości przesłania zgłoszenia z poziomu aplikacji:
                    <br>
                    <a id="zgloszenieButton2" class="green_buttony_link  mt-2 mb-2" href="formularzPomocTechniczna.php" style="z-index:20">Wyślij zgłoszenie do pomocy technicznej</a>
                    Po zarejestrowaniu zgłoszenia, nasz pracownik skontaktuje się z Państwem, celem udzielenia pomocy w rozwiązaniu problemu.
                    </span>
                    
                    <br>
                    
                </div>
                
            </div><br>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 order-md-1" style="padding:0px;">
            <div class="index_navbar_bg"></div>
            Autorskie rozwiązania informatyczne
            Oprogramowanie dla Ciebie. Pod Ciebie.
            <?php 
                    $thisQuery = "FROM szkolenia ORDER BY szkolenie_date DESC"; 
                    $thisTitle = "szkolenie_title";
                    $thisDate = "szkolenie_date";
                    $thisContent = "szkolenie_content";
                    include "includes/populate_index.php";
                ?>           
        </div>
        <div class="col-lg-4 col-md-0 col-sm-0 col-12 order-md-3">
        </div>
    </div>
   
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
