<?php 
    include "db_connect.php";
                $sql = "select * from tresc where t_id_dzialy='101' AND t_aktywny='T' AND  t_id_rodzica = 0 AND t_id = $programId order by t_kolejnosc DESC ";
                $result = $mysqli->query($sql);                        
                $row = $result->fetch_assoc();
?>

<div class="sekcja">
    <div class="row">
        <div class="col-sm-4 col-12">
            <div class="text-center"><img src="imgs/<?php echo $row["t_id"] ?>.jpg"/></div>
        </div>
        <div class="col-sm-8 col-12" style="display: flex">
            <div class="tytul my-auto"><?php echo $row["t_tytul"] ?></div>
        </div>
    </div>
    <span>
        <?php
        echo  $row["t_skrot"] ;
        ?>
    </span>
</div>