<div class="totop">&uarr;</div>
<style>
.totop {
    position: fixed;
    bottom: 50px;
    right: 50px;
    cursor: pointer;
    display: none;
    background: #313538;
    color: #fff;
    border-radius: 25px;
    height: 40px;
    line-height: 7px;
    padding: 15px;
    font-size: 18px;
}
</style>
<script src="<?php echo $base_url; ?>js/jquery-2.1.4.min.js"></script> 
<script src="<?php echo $base_url; ?>js/bootstrap.min.js"></script> 
<script src="<?php echo $base_url; ?>js/carousel.js"></script>
<script src="<?php echo $base_url; ?>js/totop.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/js_script.js"></script>
<script>
$(document).ready(function(){
	$('.totop').tottTop();
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

</body>
</html>