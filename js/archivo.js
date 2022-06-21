window.sr= ScrollReveal();

sr.reveal('.navbar',{
    duration: 2000,
    origin: 'bottom'
});

sr.reveal('.header-content-left',{
    duration: 2000,
    origin: 'top',
    distance: '300px'
});

sr.reveal('.header-content-right',{
    duration: 2500,
    origin: 'right',
    distance: '300px'

});

function enviarid_artesania(){
    var id= $('id_artid').val();
    alert('id');
};