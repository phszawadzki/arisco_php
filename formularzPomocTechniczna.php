<?php $page='pomocTechniczna' ?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/cookies.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    
<div style="height:100px"></div>
    
<div class="row">
    <div class="col-12">    
        <form id="formularz" action="/" method="GET" class="formularz">

        <!--form validation    -->


        <div class="row">
            <div class="col-sm-6" style="margin:0px;padding:0px">
                <label for="program_name">Nazwa programu</label>
                <input type="text" name="program_name" id="program_name" class="form-control mb-2 mandatory">
    <!--div oznaczony klasa invalid-feedback pojawia sie dzieki bootstrapowi gdy input dostanie klase is-invalid-->
                <div id="invalid_feedback_program_name" class="invalid-feedback"></div>
                </div>
                <div class="col-sm-6 pr0">
                <label for="password">Wersja programu <span class="optional"> (opcjonalne)</span></label>
                <input type="text" name="wersja_programu" id="wersja_programu" class="form-control mb-2">
                <div id="invalid_feedback_program_name" class="invalid-feedback"></div>
            </div>
        </div>





        <div class="form-group mb-5">
            <label for="temat">Temat</label>
            <span class="optional"> (opcjonalne)</span>
            <span class="optional"><span id="temat_counter"></span></span>
            <input type="text" name="temat" id="temat" class="form-control mb-2 " placeholder="max. 250 znaków">
            <label for="trescZgloszenia">Treść zgłoszenia</label>
            <span class="optional"><span id="tresc_counter"></span></span>
            <textarea type="text" name="trescZgloszenia" id="trescZgloszenia" class="form-control mandatory" placeholder="max. 1200 znaków"></textarea>
            <div id="invalid_feedback_trescZgloszenia" class="invalid-feedback"></div>
        </div>

    <!--word counter-->

        <script>
            $('#trescZgloszenia').keyup(function() {
              var characterCount = $(this).val().length, 
                  current = $('#tresc_counter');
              if ( characterCount < 1200 ){current.text("(Pozostało " + (1200 - characterCount) + " znaków)");}
              else {current.text("0");}
            });
            $('#temat').keyup(function() {
              var characterCount = $(this).val().length, 
                  current = $('#temat_counter');
              if (characterCount < 250 ){current.text("(Pozostało " + (250 - characterCount) + " znaków)");}
              else {current.text("0");}
            });
        </script>



        <div class="form-group mb-5">
            <label for="trescZgloszenia">Zgłaszający</label>
            <input type="text" name="zglaszajacy" id="zglaszajacy" class="form-control mb-2 mandatory" placeholder="Imię i Nazwisko">
            <div id="invalid_feedback_zglaszajacy" class="invalid-feedback"></div>

            <label for="trescZgloszenia" >Email służbowy</label>
            <input type="email" name="email" id="email" class="form-control mb-2 mandatory" placeholder="Email">
            <div id="invalid_feedback_email" class="invalid-feedback"></div>

            <label for="trescZgloszenia" >Telefon służbowy<span class="optional"> (chociaż jeden)</span></label>
            <div class="row">
                <div class="col-sm-4 p0">
                    <label for="trescZgloszenia">Komórkowy</label>
                    <input type="text" name="komorkowy" id="komorkowy" class="form-control mb-2">
                </div>
                <div class="col-sm-4 pr0">
                    <label for="trescZgloszenia">Stacjonarny</label>
                    <input type="text" name="stacjonarny" id="stacjonarny" class="form-control mb-2">
                </div>
                <div class="col-sm-4 p0 pl5"  >
                    <label for="trescZgloszenia">Wewnętrzny<span class="optional"> (opcjonalne)</span></label>

                    <input type="text" name="wewnetrzny" id="wewnetrzny" class="form-control mb-2">
                </div>
                <div id="my_invalid_feedback" class="my_invalid_feedback"></div>
            </div>
        </div>

        <div class="form-group mb-2">
            <label for="trescZgloszenia">Nazwa instytucji</label>
            <input type="text" name="nazwa" id="nazwa" class="form-control mb-2 mandatory" placeholder="Nazwa"> 
            <div id="invalid_feedback_nazwa" class="invalid-feedback"></div>
            <label for="trescZgloszenia">Ulica</label>
            <input type="street" name="ulica" id="ulica" class="form-control mb-2 mandatory" placeholder="Telefon">
            <div id="invalid_feedback_ulica" class="invalid-feedback"></div>
            <div class="row">
                <div class="col-sm-6" style="margin:0px;padding:0px">
                    <label for="trescZgloszenia">Kod pocztowy</label>
                    <input type="zip" name="kod" id="kod" class="form-control mb-2 mandatory" placeholder="__-___">
                    <div id="invalid_feedback_kod" class="invalid-feedback"></div>
                </div>
                <div class="col-sm-6 pr0">
                     <label for="trescZgloszenia">Miejscowość</label>
                    <input type="city" name="miejscowosc" id="miejscowosc" class="form-control mb-2 mandatory" placeholder="Miejscowość">
                    <div id="invalid_feedback_miejscowosc" class="invalid-feedback"></div>
                </div>
            </div>
        </div>

        <div class="form-check mb-2">
            <input type="checkbox" id="accept1" class="form-check-input mandatory">
            <label for="accept1" class="form-check-label mb-2">Wyrażam zgodę na przetwarzanie moich danych osobowych </label>        
            <span class="accept1_hidden">
                przez:<br>
                ARISCO Sp. z o.o.<br>
                adres biura: Al. Kościuszki 134, 90-451 Łódź<br>
                adres siedziby: ul. Nawrot 114, 90-029 Łódź<br><br>

                przy zachowaniu obowiązujących przepisów dotyczących ochrony danych osobowych, w celu umożliwienia udzielenia pomocy technicznej do oprogramowania ARISCO.<br><br>

                Jednocześnie informujemy, że zgodnie z obowiązującą Ustawą o Ochronie Danych Osobowych z dn. 10 maja 2018 r. oraz Ogólnym Rozporządzeniem o Ochronie Danych (RODO):<br>
                <ol>
                    <li>wyrażenie zgody powinno być świadome i dobrowolne,</li>
                    <li>powyższa zgoda może zostać wycofana w dowolnym momencie, poprzez przesłanie pisemnego oświadczenia o wycofaniu zgody na adres: biuro@arisco.pl. <b>Należy jednocześnie mieć na uwadze, iż wycofanie zgody jest jednoznaczne z brakiem możliwości dalszego udzielania pomocy technicznej w zakresie danego zgłoszenia</b></li>
                    <li>zakres przetwarzanych danych osobowych obejmuje imię, nazwisko, numer telefonu oraz adres e-mail osoby zgłaszającej,</li>
                    <li>dane osobowe będą przetwarzane wyłącznie w celu umożliwienia nawiązania kontaktu z osobą zgłaszającą,</li>
                    <li>przetwarzanie danych osobowych będzie prowadzone przez osoby posiadające odpowiednie przeszkolenie z zakresu ochrony danych osobowych,</li>
                    <li>dane nie będą udostępniane osobom trzecim, z wyjątkiem udostępnienia danych podwykonawcy (np. serwisantowi programów ARISCO) i to jedynie w celu udzielenia pomocy technicznej,</li>
                    <li>w związku z możliwością wystąpienia reklamacji dotyczącej usługi, dane osobowe związane ze zgłoszeniem będą przechowywane w systemie wewnętrznym ARISCO przez okres do dwóch lat od momentu zakończenia udzielania usługi. Po tym okresie dane osobowe zostaną zanonimizowane lub bezpowrotnie usunięte. W szczególnych przypadkach i za obopólną zgodą okres ten może ulec przedłużeniu.</li>
                </ol>
            </span>
            <span class="accept1_show"><u>Rozwiń</u></span>
            <span class="accept1_hide"><u>Zwiń</u></span>
            <div id="invalid_feedback_accept1" class="invalid-feedback">Zaakpeeeeceptuj</div>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" id="accept2" class="form-check-input mandatory">
            <span class="optional"> (opcjonalne)</span>
            <label for="accept2" class="form-check-label mb-2">Wyrażam zgodę na połączenie zdalne </label>
            <span class="accept2_hidden">
                (za pomocą aplikacji do jednorazowej pomocy zdalnej TeamViewer). W celu zapewnienia właściwej jakości usług połączenie będzie automatycznie rejestrowane i przechowywane w systemie wewnętrznym ARISCO przez okres do dwóch lat od momentu zakończenia połączenia. Po tym okresie zarejestrowane połączenie zostanie bezpowrotnie usunięte. W szczególnych przypadkach i za obopólną zgodą okres ten może ulec przedłużeniu. Jeżeli pomiędzy Państwa jednostką o firmą ARISCO Sp. z o.o. została zawarta umowa powierzenia przetwarzania danych osobowych, to jej zapisy są nadrzędne do zgody na połączenie zdalne
            </span>
            <span class="accept2_show"><u>Rozwiń</u></span>
            <span class="accept2_hide"><u>Zwiń</u></span>
            <div id="invalid_feedback_accept2" class="invalid-feedback">Zaakpeeeeceptuj</div>
        </div>
            <center>
                <div class="g-recaptcha mb-3" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
            </center>

            <button type="submit" class="green_button mb-5">Wyślij zgłoszenie</button>
        </form>
    </div>
</div>
    
    <script>
        $(".accept1_hidden").hide();
        $(".accept2_hidden").hide();
        $(".accept1_hide").hide();
        $(".accept2_hide").hide();
        $(document).ready(function(){
          $(".accept1_hide").click(function(){
            $(".accept1_hidden").hide();
              $(".accept1_hide").hide();
              $(".accept1_show").show();
          });
          $(".accept1_show").click(function(){
            $(".accept1_hidden").show();
              $(".accept1_hide").show();
              $(".accept1_show").hide();
          });
            
          $(".accept2_hide").click(function(){
            $(".accept2_hidden").hide();
              $(".accept2_hide").hide();
              $(".accept2_show").show();
          });
          $(".accept2_show").click(function(){
            $(".accept2_hidden").show();
              $(".accept2_hide").show();
              $(".accept2_show").hide();
          });
        });
</script>
    
    
    
    
    
    
    
    
    
    <script src='https://www.google.com/recaptcha/api.js?hl=pl'></script>
        
        
        
        
        
<!--form validation-->
<script>
    const form = document.getElementById('formularz')
    const program_name = document.getElementById('program_name')
    const errorElement = document.getElementById('error')
    const komorkowy = document.getElementById('komorkowy')
    const stacjonarny = document.getElementById('stacjonarny')
    let firstInvalid = null
        
    form.addEventListener('submit', (e) => {
        var els = document.getElementsByClassName("mandatory");
        //czyszcze wszystkie czerwone pola jesli jakies sa i my_invalid_feedback pod polami na numer telefonu
        Array.prototype.forEach.call(els, function(el) {
            el.classList.remove('is-invalid')            
        });
        document.getElementById('komorkowy').classList.remove('is-invalid')
        document.getElementById('stacjonarny').classList.remove('is-invalid')
        
        document.getElementById('my_invalid_feedback').innerHTML = ""
        
        //zaznaczam na czerwono wymagane pola ktore pozostawiono puste i wyswietlam stosowny komunikat pod nimi
        //pierwsza polowa
        const firstHalf = Array.prototype.slice.call(els).slice(0, 4)
        Array.prototype.forEach.call(firstHalf, function(el) {
            if (el.value === '' || el.value == null){
                if(firstInvalid === null){
                    firstInvalid = el
                }                
                el.classList.add('is-invalid')
            document.getElementById('invalid_feedback_' + el.getAttribute('id')).innerHTML = "E! Wypełnić!"
//            program_name.classList.add('is-invalid')
                e.preventDefault();
            }
        });
        //komory (bo sa specjalnym przypadkiem)
        //sprawdzam czy chociaz jeden telefon został podany i jesli nie wyswietlam stosowny komunikat 
        if ((komorkowy.value === '' || komorkowy.value == null) && (stacjonarny.value === '' || stacjonarny.value == null)){
            e.preventDefault();
            komorkowy.classList.add('is-invalid')
            stacjonarny.classList.add('is-invalid')
            document.getElementById('my_invalid_feedback').innerHTML = "Podaj chociaż jeden numer telefonu"
            if(firstInvalid === null){
              firstInvalid = komorkowy
            }
        }
        if(!komorkowy.value === '' || !komorkowy.value == null){
            if (komorkowy.value < 111111111 || komorkowy.value > 999999999){
                e.preventDefault();
                komorkowy.classList.add('is-invalid')
                document.getElementById('my_invalid_feedback').innerHTML = "Numer komórkowy ma mieć 9 znaków. Np: 500100100"
                if(firstInvalid === null){
                  firstInvalid = komorkowy
                }
            }
        }
       
        if(!stacjonarny.value === '' || !stacjonarny.value == null){
            if (stacjonarny.value < 111111111 || stacjonarny.value > 999999999){
                e.preventDefault();
                stacjonarny.classList.add('is-invalid')
                document.getElementById('my_invalid_feedback').innerHTML = "Numer stacjonarny ma mieć 9 znaków. Np: 426305050"
                if(firstInvalid === null){
                  firstInvalid = stacjonarny
                }
            }
        }
        
        //druga polowa
        const secondHalf = Array.prototype.slice.call(els).slice(4, 8)        
        Array.prototype.forEach.call(secondHalf, function(el) {
            if (el.value === '' || el.value == null){
                if(firstInvalid === null){
                    firstInvalid = el
                }                
                el.classList.add('is-invalid')
            document.getElementById('invalid_feedback_' + el.getAttribute('id')).innerHTML = "E! Wypełnić!"
//            program_name.classList.add('is-invalid')
                e.preventDefault();
            }
        });
        
        //checkbox
        //wyswietlam komunikaty pod checkboxami ktore zostawiono niezaznaczone
        let accept1 = document.getElementById('accept1')
        if(!accept1.checked) {
          if(firstInvalid === null){
              firstInvalid = accept1
          } 
          e.preventDefault();
          accept1.classList.add('is-invalid')
        }
        
        
        //skupiam sie na pierwszym zle uzupelnionym elemencie
        firstInvalid.focus()
        firstInvalid = null
    })
</script>
    
    
    
    
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
