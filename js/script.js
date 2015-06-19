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
                $(this).addClass('scaled');
                
                
                $('.menu-tip').show()
            },
            function()
            {
                $('.menu-block').not($(this)).removeClass('unscaled')
                $(this).removeClass('scaled')                
                $('.menu-tip').hide()
            }
        )

        $('.menu-block').click
        (
            function()
            {
                // $('.menu-block').removeClass('scaled')
                // $('.menu-block').removeClass('unscaled')
                $('.menu-block.unscaled').toggleClass('m-hidden')
            }
        )
    }
)