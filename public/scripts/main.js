require('css/main.scss');

$(document).ready(function(){

var sound = null;

  $('.playerButton').click(function(){

    var songPath = $(this).data('audiopath');

if (sound != null) {
        sound.stop();
        sound.unload();
        sound = null;
    }
    sound = new Howl({
        src: [songPath]
    });

// Clear listener after first call.
sound.once('load', function(){
  sound.play();
});

// Fires when the sound finishes playing.
sound.on('end', function(){
  console.log('Finished!');
});
    console.log(songPath);

  });

  $(window).keypress(function (e) {
  if (e.key === ' ' || e.key === 'Spacebar') {
    // ' ' is standard, 'Spacebar' was used by IE9 and Firefox < 37
    e.preventDefault()
    console.log('Space pressed');
    sound.stop();
  }
})

});
