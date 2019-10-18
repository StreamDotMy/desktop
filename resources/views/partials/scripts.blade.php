
    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".regular").slick({
                infinite: true,
                slidesToScroll: 4,
                variableWidth: true,
                mobileFirst: true
            });

            $(".lazy").slick({
                lazyLoad: 'ondemand', // ondemand progressive anticipated
                infinite: true
            });
        });
    </script>