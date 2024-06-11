<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->

    @include('home.slider')

    <!-- end slider section -->
</div>
<!-- end hero area -->

<!-- shop section -->

    @include('home.product')

<!-- end shop section -->







<!-- contact section -->

    @include('home.contact')



<!-- end contact section -->



<!-- info section -->

    @include('home.footer')

<script type="text/javascript">
    $(window).scroll(function() {
        sessionStorage.scrollTop = $(this).scrollTop();
    });

    $(document).ready(function(){
        if(sessionStorage.scrollTop !== "undefined") {
            $(window).scrollTop(sessionStorage.scrollTop);
        }
    });
</script>
</body>

</html>
