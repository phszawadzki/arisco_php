<!--populate_index.php doesn't have pagination-->

<!-- it connects and disconnects from database on its own (you could later extract that logic from it and use dbconnect.php to connect)-->
        <?php
            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 5;
            $offset = ($pageno-1) * $no_of_records_per_page;
            
//            ppow
//            $host = "localhost";
//            $username = "id11017824_pjotr";
//            $user_pass = "a3BD6MMKHq@Fjmg";
//            $database_in_use = "id11017824_articles";
//            $conn=new mysqli($host,$username,$user_pass,$database_in_use);
//            local
            $conn=new mysqli("localhost","root","","test");

            // Check connection
            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                die();
            }

            $total_pages_sql = "SELECT COUNT(*) $thisQuery";
            $result = mysqli_query($conn,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $sql = "SELECT * $thisQuery LIMIT $offset, $no_of_records_per_page";
            $res_data = mysqli_query($conn,$sql);
    
            if ($total_rows > 0) {
                while($row = mysqli_fetch_array($res_data)){
                    echo    '<div class="sekcja sekcja_index"  style="background-color: white;" >
                                <div class="tytul">'. $row[$thisTitle] . '</div>
                                <div class="tresc">
                                    <span class="data">'. $row[$thisDate] . '</span><br><span>'
                                    . substr($row[$thisContent],0 , 250) . 
                                    '...
                                    </span>
                                    <div class="ukryte">'
                                    . $row[$thisContent] . 
                                        '<br><br>
                                    </div>                        
                                    <div class="button_container d-block d-lg-none">
                                        <button class="green_button rozwin_button">Rozwiń</button>
                                    </div>
                                    <div class="button_container d-none d-lg-block">
                                        <button class="green_button wiecej_button">Więcej</button>
                                    </div>
                                    <div class="button_container d-none">
                                        <button class="green_button zwin_button">Zwiń</button>
                                    </div>
                                </div>
                            </div><br>';
                    
                
                }
           
            } else {
                echo '
                <div class="text-center" style="font-size:2em">
                
                Brak wyników
                
                </div>
                ';
            }
            mysqli_close($conn);
        ?>