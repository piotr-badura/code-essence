$(document).ready
(
    function()
    {
        $('.menu-block').hover
        (
            function()
            {
                var offset = $(this).offset()
                var position = $(this).position()
                
                console.log(offset)
                
                var h = Math.floor(window.innerWidth/2);
                var v = Math.floor(window.innerHeight/2);                                                
                
                $('.menu-block').not($(this)).addClass('unscaled')
                $(this).addClass('scaled')
            },
            function()
            {
                $('.menu-block').not($(this)).removeClass('unscaled')
                $(this).removeClass('scaled')                
            }
        )
    }
)