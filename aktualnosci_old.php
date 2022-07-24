<?php $page='aktualnosci' ?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    
    <div style="margin-top:65px"></div>
    
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-12">
                <div id="output">
                    <div class="search">
                        <i class="fas fa-search"></i>                                     
                        <form action="searchKeyword.php">
                            <input name="keyword" type="text" placeholder="Wpisz szukaną frazę" oninput="thiseFunction()">
                            <button id="search-button" type="submit" value="Submit">Szukaj</button>
                        </form>

    <script>
    function thiseFunction() {
      document.getElementById("search-button").innerHTML = "Enter";
    }
    </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <div class="container-fluid" style="max-width: 1520px">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12" >	
                <?php 
                    $thisQuery = "FROM article ORDER BY article_date DESC"; 
                    $thisTitle = "article_title";
                    $thisDate = "article_date";
                    $thisContent = "article_content";
                    include "populate.php";  
                ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">                               
                <?php
                include "db_connect.php";
                include "oneAktualnosc.php";
                $mysqli->close();
                ?>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
