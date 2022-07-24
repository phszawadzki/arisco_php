<?php $page='szkolenia' ?>
<?php $pageSzkolenia='szkolenia' ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/navbarSzkolenia.php'; ?>
    
    <div class="container-fluid" style="max-width: 1520px">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12" >	
                <div style="height:10px;"></div>
                <?php 
                    $thisQuery = "FROM szkolenia ORDER BY szkolenie_date DESC"; 
                    $thisTitle = "szkolenie_title";
                    $thisDate = "szkolenie_date";
                    $thisContent = "szkolenie_content";
                    include "populate.php";
                ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">                               
                <?php
                include "db_connect.php";
                include "oneSzkolenie.php";
                $mysqli->close();
                ?>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
