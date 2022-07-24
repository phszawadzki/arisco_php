



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <div style="height:100px;"></div>
    <div class="container-fluid" style="max-width: 1520px">
        <div class="row mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <?php include 'includes/searchBar.php'; ?>
                <?php
                    $searchedWord = $_GET["keyword"];
                    $thisQuery = "FROM article WHERE article_content LIKE '%" . $searchedWord ."%' ORDER BY article_date DESC"; 
                    $thisTitle = "article_title";
                    $thisDate = "article_date";
                    $thisContent = "article_content";
                    include "populate.php";                     
                ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <?php
                include "db_connect.php";
                $searchedWord = $_GET["keyword"];
                $sql = "SELECT * FROM article WHERE article_content LIKE '%" . $searchedWord ."%' ORDER BY article_date DESC LIMIT 1";
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
                     </div><br>' ;
                    }
                }

                $mysqli->close();
                ?>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
