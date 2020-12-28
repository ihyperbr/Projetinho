$(function(){

		$('#checkbox').change(function () {
	        setInterval(function () {
	            moveRight();
	        }, 3000);
	    });
	    var slideCount = $('#slider ul li').length;
	    var slideWidth = $('#slider ul li').width();
	    var slideHeight = $('#slider ul li').height();
	    var sliderUlWidth = slideCount * slideWidth;
	    $('#slider').css({
	        width: slideWidth,
	        height: slideHeight
	    });
	    $('#slider ul').css({
	        width: sliderUlWidth,
	        marginLeft: -slideWidth
	    });
	    $('#slider ul li:last-child').prependTo('#slider ul');
	    function moveLeft() {
	        $('#slider ul').animate({
	            left: +slideWidth
	        }, 200, function () {
	            $('#slider ul li:last-child').prependTo('#slider ul');
	            $('#slider ul').css('left', '');
	        });
	    };
	    function moveRight() {
	        $('#slider ul').animate({
	            left: -slideWidth
	        }, 200, function () {
	            $('#slider ul li:first-child').appendTo('#slider ul');
	            $('#slider ul').css('left', '');
	        });
	    };
	    $('a.control_prev').click(function () {
	        moveLeft();
	    });
	    $('a.control_next').click(function () {
	        moveRight();
	    });

        $('.mobile').click(function(){
            $(this).find('ul').slideToggle();
        })


	    function disableTextSelection(){
	          $("body").css("-webkit-user-select","none");
	          $("body").css("-moz-user-select","none");
	          $("body").css("-ms-user-select","none");
	          $("body").css("-o-user-select","none");
	          $("body").css("user-select","none");
        }

        function enableTextSelection(){
	          $("body").css("-webkit-user-select","auto");
	          $("body").css("-moz-user-select","auto");
	          $("body").css("-ms-user-select","auto");
	          $("body").css("-o-user-select","auto");
	          $("body").css("user-select","auto");
        }
})