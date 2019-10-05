<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".regular").slick({
                infinite: true,
                slidesToScroll: 4,
                variableWidth: true,
                mobileFirst: true
                    // responsive: [{
                    //     breakpoint: 1024,
                    //     settings: {
                    //         slidesToShow: 5,
                    //         slidesToScroll: 1,
                    //         centerMode: false,
                    //         settings: 'unslick'
                    //     }
                    // }],
                    // responsive: [{
                    //     breakpoint: 1200,
                    //     settings: {
                    //         slidesToShow: 5,
                    //         slidesToScroll: 1,
                    //         centerMode: false,
                    //         settings: 'unslick'
                    //     }
                    // }],
                    // responsive: [{
                    //     breakpoint: 1300,
                    //     settings: {
                    //         slidesToShow: 6,
                    //         slidesToScroll: 1,
                    //         centerMode: false,
                    //         settings: 'unslick'
                    //     }
                    // }]
            });

            $(".lazy").slick({
                lazyLoad: 'ondemand', // ondemand progressive anticipated
                infinite: true
            });
        });
    </script>