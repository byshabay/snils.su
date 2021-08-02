$(document).ready(function(){
    /*BURGER*/
    $('.header__burger').click(function(event){
        $('.header__burger, .header__list, .header__info').toggleClass('active');
    });
    /*ACTIVE MENU LINKS*/
   var url = $(location).attr('href');
   $.each($('.header__bottom_list li a'), function(){
        if(this.href == url){
            $(this).addClass('active_link');
        }
   });
   
});