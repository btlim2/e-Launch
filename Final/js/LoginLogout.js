function logout() {
	$.ajax({
		url:"php/sessionlogout.php",
		error:function() {alert("Time Out")},
		success: function() {
            
            window.location.href="index.html";
            $message = 'Logout Successful!';
            alert($message);
        }
	});
}

$('.tabs .tab').click(function(){
    if ($(this).hasClass('signin')) {
        $('.tabs .tab').removeClass('active');
        $(this).addClass('active');
        $('.cont').hide();
        $('.signin-cont').show();
    } 
    if ($(this).hasClass('signup')) {
        $('.tabs .tab').removeClass('active');
        $(this).addClass('active');
        $('.cont').hide();
        $('.signup-cont').show();
    }
});
$('.container .bg').mousemove(function(e){
    var amountMovedX = (e.pageX * -1 / 30);
    var amountMovedY = (e.pageY * -1 / 9);
    $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
});