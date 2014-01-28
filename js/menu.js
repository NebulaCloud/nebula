
window.onload = function(){
    $('.menu-btn').on('click', function(){
    	$(this).parent().parent().children('div').toggle();
    })
};