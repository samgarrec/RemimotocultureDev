
$(document).ready(function() {
    $('.text_diapo2').css('display','block');
    $('.text_diapo1').css('display','block');

    $('.text_diapo2').textillate({ in: { effect: 'bounceInUp' } });

    $('.text_diapo1').textillate({ initialDelay:500 , in: { effect: 'fadeInUp',delay : 20 } });

});