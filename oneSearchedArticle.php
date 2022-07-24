<?php

 //getting values from database    
    $sql = "SELECT articleId, article_title, article_content, article_date FROM article ORDER BY article_date DESC LIMIT 1";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            
            
            echo    '<div id="artykul" class="sekcja"  style="margin:0px; position: sticky; top:121px;" >
                    <div class="tytul">'. $row["article_title"] . '</div>

                    <div class="tresc" >
                        <span class="data">'. $row["article_date"] . '</span><span  class="data"> - </span>'
                        . $row["article_content"] . 
                        
                         
                        
            
                        
                            
                            
                        '
                    </div>
                </div><br>' ;
            
            
        }
    } else {
        
    }





?>