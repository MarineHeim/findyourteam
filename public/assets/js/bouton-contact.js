
var basicTimeline = anime.timeline({
  autoplay: false
});


var pathEls = $(".check");
for (var i = 0; i < pathEls.length; i++) {
  var pathEl = pathEls[i];
  var offset = anime.setDashoffset(pathEl);
  pathEl.setAttribute("stroke-dashoffset", offset);
}

basicTimeline
  .add({
    targets: ".text-envoyer",
    duration: 1,
    opacity: "0"
  })
  .add({
    targets: ".button",
    duration: 1200,
    height: 20,
    width: 300,
    backgroundColor: "#00BCD4",
    border: "0",
    borderRadius: 100
  })
  .add({
    targets: ".progress-bar",
    duration: 2000,
    width: 650,
    easing: "linear"
  })
  .add({
    targets: ".button",
    width: 0,
    duration: 1
  })
  .add({
    targets: ".progress-bar",
    width: 80,
    height: 80,
    delay: 500,
    duration: 400,
    borderRadius: 80,
    backgroundColor: "#ffffff",
  })
  .add({
    targets: pathEl,
    strokeDashoffset: [offset, 0],
    duration: 200,
    easing: "easeInOutSine"
  });

$(".button").click(function() {
  basicTimeline.play();
  $.ajax({
     url : '/findyourteam/public/contact', // La ressource ciblée
     type : 'POST', // Le type de la requête HTTP.
     data :  $('#form').serialize()
   }).done(function( data ) {
     console.log(data);
     if (data.mail) {
       $('#errorEmail').append(data.mail);
       $('#errorEmail').show();
     }

     if (data.message) {
       $('#errorMessage').append(data.message);
       $('#errorMessage').show();
     }

     if (data.success) {
       $('#successMessage').append(data.success);
       $('#successMessage').show();
     }

    });

});
