var allowedKeys = {
    37: 'left',
    38: 'up',
    39: 'right',
    40: 'down',
    65: 'a',
    66: 'b'
  };
  
  var konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];


  var konamiCodePosition = 0;
  

  document.addEventListener('keydown', function(e) {
    var key = allowedKeys[e.keyCode];
    var requiredKey = konamiCode[konamiCodePosition];
    if (key == requiredKey) {
      konamiCodePosition++;
      if (konamiCodePosition == konamiCode.length) {
        activateCheats();
        konamiCodePosition = 0;
      }
    } else {
      konamiCodePosition = 0;
    }
  });



  function activateCheats() {
    alert("vu que creer une page c'était long, j'ai préféré vous mettre un peu d'une musique assez sympathique :)");
    var audio = new Audio('https://akuramu.xyz/song/ak.mp3');
    audio.play();
	audio.volume = 1;
    setTimeout(function(){
        alert("Au passage, je me suis permis de vous faire installer WannaCry")
    }, 6000)
    setTimeout(function(){
        alert("C'est faux bien évidemment :}")
    }, 7500)
	    setTimeout(function(){
        alert("Il ne sers à rien d'attendre, il ne se passera rien :}")
    }, 10000)
	}