var estado = true;
setTimeout("cambio()", 9000);
function cambio() {
    estado = !estado;
    if (estado == true)
        img.src = "img/Hand Taking Strawberrys And Cream Cake.jpg"
    else
        img.src = "img/AZ3NPVPEZ6.jpg"
    setTimeout("cambio()", 5000);
}
$(document).ready(function(){
    $('.carousel').carousel({
        dist:0,
        shift:0,
        padding:20,

    });

});

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});
$(".button-collapse").sideNav();

$('.tap-target').tapTarget('open');
$('.tap-target').tapTarget('close');
$('.carousel.carousel-slider').carousel({fullWidth: true});
$(document).ready(function(){
    $('.slider').slider();
});
$(document).ready(function(){
    $('.collapsible').collapsible();
});
$('.collapsible').collapsible({
    accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
    onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
});
// Open
$('.collapsible').collapsible('open', 0);
