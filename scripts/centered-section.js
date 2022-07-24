
//obnizyc strone o wysokosc navbaru, bo bedzie sie zmieniala czasem
//var mainImgHeight = document.getElementById('navbar').clientHeight;
//document.querySelector('#container').setAttribute("style", "margin-top:" + mainImgHeight + "px");



let address;
//search on enter
function handle(e){
	address=document.getElementById("searchBar").value;
    if(e.keyCode === 13){
		alert("You are searching: " + address);
    }
	return false;
}
//search on click
function search_func(){
	address=document.getElementById("address").value;
	//write your specific code from here	
	alert("You are searching: " + address);
}

//searchbox
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
  var searchBar = $("#searchBar");
  var search = $('.search');
  
  searchBar.focusin(function() {
      search.addClass('active');
  });
  searchBar.focusout(function() {
      search.removeClass('active');
  });

  //wciskanie przycisku wyszukiwania
  function wcisnij(elem){
        elem.setAttribute("style", "padding: 4px 24px");
        setTimeout(function(){ elem.setAttribute("style", "padding: 5px 25px"); }, 100);
  }