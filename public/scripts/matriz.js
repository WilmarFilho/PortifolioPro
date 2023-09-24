$(document).ready(function() { // Garante que todo o site seja carregado
  
  setInterval(function () {
    $('.loader').fadeOut();
    $('#preloader').delay(450).fadeOut('slow');
  }, 10);

  $('#div-principal').delay(450).animate({top: '1px', opacity: '1' }, 1100)
  $('#img-principal').delay(450).animate({top: '1px', opacity: '1' }, 1100)
  
  $(window).on('scroll',function() {
    

    var posAtual = $(this).scrollTop()
    
    var posProjetos = $('#carrosel').offset()
    var FinalPosProjetos = Math.ceil(posProjetos.top)

    var posNKW = $('#projetos').offset()
    var FinalPosNKW = Math.ceil(posNKW.top)

    var posContato = $('#nkw').offset()
    var FinalPosContato = Math.ceil(posContato.top)

    var posCelleta = $('#contato').offset()
    var FinalPosCelleta = Math.ceil(posCelleta.top)
    
    if(posAtual > FinalPosProjetos && posAtual < FinalPosProjetos + 30) {
      $('#projetos').delay(450).animate({top: '1px', opacity: '1' }, 1100)
    }

    if(posAtual > FinalPosNKW && posAtual < FinalPosNKW + 300) {
      $('#nkw').delay(450).animate({top: '1px', opacity: '1' }, 1100)
    }

    if(posAtual > FinalPosContato && posAtual < FinalPosContato + 300) {
      $('#contato').delay(450).animate({top: '1px', opacity: '1' }, 1100)
    }

    if(posAtual > FinalPosCelleta && posAtual < FinalPosCelleta + 300) {
      $('#celleta').delay(450).animate({top: '1px', opacity: '1' }, 1100)
    }
  
  })
  

})


function play1() {

  let myMusic2 = document.getElementById("music2");
  myMusic2.pause();

  let myMusic3 = document.getElementById("music3");
  myMusic3.pause();
		  					
  let myMusic1 = document.getElementById("music1");

  myMusic1.play();

};

function play2() {

  let myMusic1 = document.getElementById("music1");
  myMusic1.pause();

  let myMusic3 = document.getElementById("music3");
  myMusic3.pause();
		  					
  let myMusic2 = document.getElementById("music2");

  myMusic2.play();

};

function play3() {

  let myMusic1 = document.getElementById("music1");
  myMusic1.pause();

  let myMusic2 = document.getElementById("music2");
  myMusic2.pause();
		  					
  let myMusic3 = document.getElementById("music3");

  myMusic3.play();

};


console.log('testestetetetetete')