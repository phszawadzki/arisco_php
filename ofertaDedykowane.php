<?php $page='oferta' ?>
<?php $pageOferta='dedykowane' ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php include "includes/navbarOferta.php" ?>
    
    
<div id="rowContainer" class="row pt-3 mb-5">
    <div class="container" style="width: 900px; padding:0px;">
        <div class="col-md-12 col-sm-12" style="padding:0px;">				
            <div id="programy" class="row mt-3">
                						
                    <?php

    include "db_connect.php";
    
    //getting values from database    
    $sql = "select * from tresc where t_id_dzialy='101' AND t_aktywny='T' AND  t_id_rodzica = 0 AND t_id != 449 AND p_typ = 'X' order by t_kolejnosc DESC";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            
        include "includes/program.php";
        }
    } else {
        echo "Brak wyników";
    }
    
?>
                    
                    
                
            </div>
        </div>
    </div>
</div>
    
    
    
    
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
