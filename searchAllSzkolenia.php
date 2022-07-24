<?php

    include "db_connect.php";

 //Search the database for the word Nowelizacja
//    if ($mysqli->connect_errno) {
//        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//    }
//    echo $mysqli->host_info . "\ndup";
    
    //getting values from database
    
    $sql = "SELECT szkolenieId, szkolenie_title, szkolenie_content, szkolenie_date FROM szkolenia ORDER BY szkolenie_date DESC";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            
            
            
        echo    '<div class="sekcja"  style="background-color: white; margin:0px" >
                    <div class="tytul">'. $row["szkolenie_title"] . '</div>

                    <div class="tresc">
                        <span class="data">'. $row["szkolenie_date"] . '</span><br><span>'
                        . substr($row["szkolenie_content"],0 , 250) . 
                        '...
                        </span>
                        <div class="ukryte">'
                        . $row["szkolenie_content"] . 
                            '<br><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div><img src="/imgs/pdf.png" alt="pdf"/> Zakres_szkolenia.pdf </div>
                                </div>  
                                <div class="col-lg-12">
                                    <div><img src="/imgs/pdf.png" alt="pdf"/> FORMULARZ_ZGŁOSZENIA_na_szkolenie_GOMiG.pdf </div>
                                </div> 
                            </div>
                        </div>                        
                        <div class="button_container d-block d-lg-none">
                            <button class="green_button rozwin_button">Rozwiń</button>
                        </div>
                        <div class="button_container d-none d-lg-block">
                            <button class="green_button wiecej_button">Więcej</button>
                        </div>
                    </div>
                </div><br>';
            
            
        }
    } else {
        echo "Brak wyników";
    }
    
?>