$(document).ready(function(){
//** Log in with facebook=> //

var f1 = $('.text'), /** Log in with facebook**/

	f2 = $('.btn2'), /** forget password**/

	f3 = $('.signup'); /** signup**/
	// f1,f2,f3

	var username = $('.username'),
	button = $('.button'),
	password = $('.password');

		button.on('click', function() {
	// if (!username.val().indexOf('a'+'b')) {

	// 	console.log('have');
	// }
	// else {
	// 	console.log('No have');
	// }
	
});
	// var comment = $('.comment');
button.on('click', function(e) {
	/* Act on the event */
	var xx = username.val(); //value user
    var substring = xx.substring(); //the  world 
    var pattern = /[\u0600-\u06FF]/; //world arbic
    if (xx = pattern.test(substring) || xx ==('') || xx == 0/**if have world arbic **/   )  {
    	username.addClass('add2');
    	e.preventDefault();

    }else {
    	console.log('NO');
    }

   
});


});