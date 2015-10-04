$(document).ready
(
    function()
    {
        // languages
        
        $('.li-menu-flag a').click
        (
            function(e)
            {
                e.preventDefault()
            }
        )
        
        $('.li-menu-flag a span.span-lang').click
        (
            function(e)
            {
                var lang = $(this).data('lang');
                window.location = '/languages/change/' + lang;
                
                e.preventDefault()
            }
        )

        // newsletter
        
        function subscribe(e)
        {            
            $.ajax
            (
                {
                    type: e.attr("method"), 
                    url: e.attr("action"), 
                    data: e.serialize(), 
                    // cache: !1, 
                    dataType: "json",
                    // contentType: "application/json",
                    error: function()
                    {
                        $("#notification_container").html('<div id="nl-alert-container" class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Could not connect to server. Please try again later.</div>')
                    },
                    success: function(e)
                    {
                        var t = e.msg; 
                        if (!e.status)
                        {                            
                            $("#notification_container").html('<div id="nl-alert-container"  class="alert alert-danger alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' + t + "</div>")
                        } 
                        else
                        {
                            $("#notification_container").html('<div id="nl-alert-container"  class="alert alert-success alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' + t + "</div>")
                        }
                    }
                }
            )
        }
        
        $('#mc-embedded-subscribe-form').submit
        (
            function(event)
            {
                var $this = $(this)
                
                subscribe($this)
                
                event.preventDefault()
            }
        )

        /*
        $('a.ce-smooth-scroll[href^="#"]').on
        (
            "click", 
            function(e)
            {
                var t = $($(this).attr("href")); 
                t.length && (e.preventDefault(), $("html, body").animate({ scrollTop: t.offset().top - 60 }, 600))
            }
        );
        */
    }
)