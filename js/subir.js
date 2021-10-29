$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#subir').fadeIn(); 
        } else { 
            $('#subir').fadeOut(); 
        } 
    }); 
    $('#subir').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
