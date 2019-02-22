/*================================================================================
  Nome Projeto: SBA - Sistema Brasileiro do Agronegócio - Painel Administrativo
  Versão: 1.0
  Criador: Kaio Espindola
  Criador URL: http://kaioespindola.com.br
================================================================================*/

$( document ).ready(function(){

  $('.modal-trigger').leanModal();

  $('.carousel').carousel();

  $('.parallax').parallax();

  $(".button-collapse").sideNav();

  $('.scrollspy').scrollSpy();

  $('.collapsible').collapsible();

  $('input#input_text, textarea#textarea1').characterCounter();

  //SlideShow
  $('.slider').slider({
    height: 355,
    //height: 310,
    indicators: false,
    interval: 15000
  });

  // Menu Dropdown
  $('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 125,
    constrain_width: false,
    hover: true,
    gutter: 0,
    belowOrigin: true
  });

  //Main Left Sidebar Menu
  $('.sidebar-collapse').sideNav({
    edge: 'left',    
  });

  //Tolltip Button
  $('.tooltipped').tooltip({delay: 5});

  //Datetime Picker
  $("#dtBox").DateTimePicker();

  //Select Dropdown
  $('select').material_select();
 
});

//Script Preview Upload
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };