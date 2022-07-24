<style>
    button {
        background-color:red;
        margin-left:-80px;
        border-radius:100%;
        border:0px;
    }
    input {
        height:30px;
        width: 200px;
        border-radius: 30px;
        border: 1px solid rgb(200,200,200);
        padding-left:20px;
    }
    
    ::placeholder {
      color: rgb(150,150,150);
      opacity: 1; /* Firefox, Chrome */
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
         margin-left:20px;
     color: blue;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
         margin-left:20px;
     color: blue;
    }
</style>




<div class="container-fluid">
    <div class="row" >
        <div class="col-md-12">
            <div id="output">
                <div class="search">
                    <i class="fas fa-search"></i>                                     
                    <form action="searchKeyword.php">
                        <input  name="keyword" type="text" placeholder="Szukaj...">
                        <button id="search-button" type="submit" value="Submit">Szukaj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>