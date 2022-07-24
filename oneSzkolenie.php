<?php           
    $sql = "SELECT szkolenie_id, szkolenie_title, szkolenie_content, szkolenie_date FROM szkolenia ORDER BY szkolenie_date DESC LIMIT 1";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            echo    
            '<div  class="sekcja d-none d-lg-block"  style="margin:0px; position:sticky; top:121px; " >
                <div id="oneTytul" class="tytul">' . $row["szkolenie_title"] . '</div>

                <div id="oneScrollable" class="tresc" style="overflow-y:auto;">
                    <span id="oneData" class="data">' . $row["szkolenie_date"] . '</span>
                    <span  class="data"> - </span>
                    <span id="oneTresc">' . $row["szkolenie_content"] . '</span>
                </div>
            </div><br>';
        }
    }
?>

