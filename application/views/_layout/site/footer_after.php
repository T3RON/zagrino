  
    
    
    
    
    
    
    
    
    
    
    <script type="text/javascript">
        new Pushbar({
				blur:true,
				overlay:true,
        });
    </script>
<script>
    Toggler.Init({
        CLASS_BASE: 'js-toggler',
        CLASS_VISIBLE: 'is-visible',
        CLASS_TARGET_VISIBLE: 'is-target-visible',
        CLASS_TRANSITIONING: 'is-transitioning',
        CLASS_FADE: 'is-fade',
        CLASS_SLIDEFADE: 'is-slidefade',
        DELEGATE_CLICK: false
    });
</script>
<script>
    var swiper = new Swiper('.main_swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });


</script>

</body>
</html>