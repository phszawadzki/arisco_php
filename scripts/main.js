


//sets all program-containers to be same height
//function setBlockHeight(){
//    var els = document.getElementsByClassName("program-height");
//    let maxHeight = 0;
//    Array.prototype.forEach.call(els, function(el) {
//        let thisHeight = el.clientHeight;
//        if (thisHeight > maxHeight){
//            maxHeight = thisHeight;
//        }
//    });
//    maxHeight += 60;
//    var secs = document.getElementsByClassName("program-section");
//    Array.prototype.forEach.call(secs, function(sec) {
//        sec.setAttribute("style", "height:" + maxHeight + "px") 
//    });
//}

function setOneSzkolenieHeight(){
    let szkolenieHeight = window.innerHeight - 121 - 100;
    document.getElementById('oneScrollable').style.maxHeight = szkolenieHeight + "px";
}

function setIndexArticleHeight(){
    let indexArticleHeight = window.innerHeight - 90;
    document.getElementById('indexScrollable').style.maxHeight = indexArticleHeight + "px";
}

// 'nadpisuje' nasluchiwacza rozmiaru okna 
var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
}
//wywoluje funkcje onResize, gdy zmieniany jest rozmiar okna
addEvent(window, "resize", onResize);    
function onResize(){
    setTimeout(function(){ setBlockHeight(); }, 50);
    setTimeout(function(){ setOneSzkolenieHeight(); }, 50);
    setTimeout(function(){ setIndexArticleHeight();; }, 50);
}

//lepiej moze uzyc onPageLoad czy jakos tak
setTimeout(function(){ setBlockHeight(); }, 50);
setTimeout(function(){ setOneSzkolenieHeight(); }, 50);
setTimeout(function(){ setIndexArticleHeight(); }, 50);




//strona glowna
//plus/minus button animation
$('.circle-plus').on('click', function(){
  $(this).toggleClass('opened');
})


$(document).ready(function(){
   $('.hidableSection').hide();
});
$(function(){
    $(".circle_big").click(function(e){
        e.preventDefault();
    let $parentClass = $(this).parents('.parallax');    
      if($parentClass.hasClass("toggled")){
          $parentClass.animate({"height": "300px"}).removeClass("toggled");
          $parentClass.find('.hidableSection').slideToggle();
      }
      else {
          $parentClass.animate({"height": "800px"}).addClass("toggled");
          $parentClass.find('.hidableSection').slideToggle();
      }      
    });
});

$(function(){
  $("#toggle").click(function(e) {
        e.preventDefault();
        if($("#numbers").hasClass("toggled")) {
            $("#numbers").animate({"height": "200px"}).removeClass("toggled");
        } else {
    $("#numbers").animate({"height": "100px"}).addClass("toggled");
    }
  });
});

//plus/minus button action for small parallaxes
$(document).ready(function(){
    $(".circle_small").click(function(){
        $(this).parents('.parallax').next().slideToggle();    
    });
});

$(document).ready(function(){
    $(".rozwin_button").click(function(){
     $(this).parents('.button_container').prev().show()
     $(this).parents('.button_container').prev().prev().hide()
     $(this).parents('.button_container').next().next().removeClass("d-none")
     $(this).hide()  
    });
});
$(document).ready(function(){
    $(".zwin_button").click(function(){
     $(this).parents('.button_container').prev().prev().prev().hide()
     $(this).parents('.button_container').prev().prev().prev().prev().show()
     $(this).parents('.button_container').prev().prev().children().show()
     $(this).parents('.button_container').addClass("d-none")       
    });
});
$(document).ready(function(){
    $(".wiecej_button").click(function(){
      let $tresc = $(this).parents('.button_container').prev().prev();
      document.getElementById('oneTresc').innerHTML = $tresc.html();
      let $data = $tresc.prev().prev().prev();
      document.getElementById('oneData').innerHTML = $data.html();
      let $tytul = $data.parents('.tresc').prev();
      document.getElementById('oneTytul').innerHTML = $tytul.html();
      $('#zgloszenieButton1').hide();
      $('#zgloszenieButton2').hide();
    });
});

//modal zamów
let tel = document.getElementById('zamow_telefon').classList;
let email = document.getElementById('zamow_email').classList;
let gg = document.getElementById('zamow_gg').classList;
let tel_h = document.getElementById('zamow_tel_hide');
let email_h = document.getElementById('zamow_email_hide');
let gg_h = document.getElementById('zamow_gg_hide');

function clearAllColors(){    
    tel.remove('red_link');
    tel.add('grey_link');
    email.remove('green_link');
    email.add('grey_link');
    gg.remove('green_link');
    gg.add('grey_link');
}

function hideAll(){  
    $(tel_h).hide();
    $(email_h).hide();
    $(gg_h).hide();
}
$(document).ready(function(){
    $(email_h).hide();
    $(gg_h).hide();
});

$(document).ready(function(){
    $("#zamow_email").click(function(){ 
        clearAllColors();
        hideAll();
        email.remove('grey_link');
        email.add('green_link');
        $(email_h).show();
    });
});

$(document).ready(function(){
    $("#zamow_gg").click(function(){ 
        clearAllColors();
        hideAll();
        gg.remove('grey_link');
        gg.add('green_link');
        $(gg_h).show();
    });
});

$(document).ready(function(){
    $("#zamow_telefon").click(function(){ 
        clearAllColors();
        hideAll();
        tel.remove('grey_link');
        tel.add('red_link');
        $(tel_h).show();
    });
});
//modal zamów KONIEC