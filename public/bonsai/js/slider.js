$(()=>{

    $('.next').click(function(){
        changeImage('next');
    })
    $('.prev').click(function(){
        changeImage('prev');
    })
})
function changeImage(type){
    const imgSelecVisibe = $('img.img-fluid-sp:visible');
    let imgVisible = parseInt(imgSelecVisibe.attr('number'));
    let eqNumber = type ==='next'? imgVisible +1 : imgVisible -1;
    if (imgVisible === 0) {
        eqNumber >= $('img-fluid-sp').length-1;
    }
    if (eqNumber >= $('.img-fluid-sp').length) {
        eqNumber = 0
    }
    console.log(eqNumber);
    $('img.img-fluid-sp').eq(eqNumber).fadeIn();
    imgSelecVisibe.fadeOut();
}

