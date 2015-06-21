$(document).ready
(
    function()
    {
        // carousel - start
        
        $('#ce-carousel').carousel
        (
            {
                interval: 2000,
                pause: 'hover',
                wrap: true
            }
        );

        $('#slider-header .ce-carousel-indicators li').click
        (
            function()
            {
                var slide = $(this).data('slide-to')                
                
                $('#ce-carousel').carousel(slide);
                
                $('ol.ce-carousel-indicators li.active').removeClass("active");
                $(this).addClass("active");                
            }
        )

        $('#ce-carousel').on
        (
            'slide.bs.carousel', 
            function()
            {
                $holder = $( "ol.ce-carousel-indicators li.active" );
                $holder.removeClass('active');
                
                var idx = $('#ce-carousel div.item.active').index('div.item');                
                
                $('ol.ce-carousel-indicators li[data-slide-to="'+ idx+'"]').addClass('active');                
            }
        )
        
        // carousel - end
        
        $('li.hb').hover
        (
            function()
            {
                $('li.hb').not($(this)).addClass('unhovered')
                $(this).addClass('hovered');
            },
            function()
            {
                $('li.hb').not($(this)).removeClass('unhovered')
                $(this).removeClass('hovered')
            }
        )
        
        $('li.hb').click
        (
            function()
            {
                $('li.hb.unhovered').toggleClass('collapsed')
                $('li.hb').not($(this)).removeClass('unhovered')
                $(this).removeClass('hovered')
                $(this).addClass('active')
                // $('#header').toggleClass('collapsed')
            }
        )

        $('#header-button').click
        (
            function()
            {
                $('#header-xs').slideToggle()
            }
        )
    }
)