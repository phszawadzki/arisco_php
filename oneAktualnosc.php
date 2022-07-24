<?php          
                
$sql = "SELECT * FROM article  ORDER BY article_date DESC LIMIT 1  ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo    
        '<div class="sekcja d-none d-lg-block" style="margin:0px; position:sticky; top:75px; ">
            <div id="oneTytul" class="tytul">'. $row["article_title"] . '</div>

            <div id="oneScrollable" class="tresc" style="overflow-y:auto;">
                <span id="oneData" class="data">'. $row["article_date"] . '</span>
                <span class="data"> - </span>
                <span id="oneTresc">'. $row["article_content"] .  '</span>
            </div>
         </div><br>';
    }
}

?>



