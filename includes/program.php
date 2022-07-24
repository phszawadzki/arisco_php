<?php 
echo    '<div class="col-lg-4 col-sm-6 program-container">
                <div class="program-section" style="display:flex">
                    <div class="program-height" style="margin-top:0px !important;">
                        <div class="row" >
                            <div class="col-md-12 col-sm-12 col-3 my-auto" style="padding:0px;">
                                <img class="program-img img-fluid" src="imgs/' . $row["t_id"] . '.jpg"  alt="' . $row["t_tytul"] . '" title="' . $row["t_tytul"] . '"/>
                            </div>
                            <div class="col-md-12 col-sm-12 col-9 my-auto" style="height:100px; display: flex; align-items: center; justify-content: center;">                                    
                                <div style="font-size:1.2em;text-transform: capitalize;" class="text-center">
                                <b>
                                ' . $row["t_tytul"] . '
                                </b>
                                </div>
                            </div>
                            <a href="http://www.arisco.pl/pobierz/f514cec81cb148559cf475e7426eed5e" class="green_buttony_link2 program_button" >Więcej</a>
                        </div>
                    </div>
                </div>
        </div>';   
?>