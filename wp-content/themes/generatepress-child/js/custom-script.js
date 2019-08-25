var jq=jQuery.noConflict();

jq(document).ready(function(){
	jq('.hamburger-shell').click(function(){
		jq('#menu').slideToggle(300);
		jq('.top').toggleClass('rotate');
		jq('.middle').toggleClass('rotate-back');
		jq('.menu-name').toggleClass('bump');
		jq('.bg-cover').toggleClass('reveal');
	});
	jq('.bg-cover').click(function(){
		jq('#menu').slideToggle(300);
		jq('.top').toggleClass('rotate');
		jq('.middle').toggleClass('rotate-back');
		jq('.menu-name').toggleClass('bump');
		jq('.bg-cover').toggleClass('reveal');
	});
  jq(window).scroll(function() {

   var st = jq(this).scrollTop();
   if( st > 100 ) {
   jq("#primary-menu").addClass("darkHeader");
   } else {
   jq("#primary-menu").removeClass("darkHeader");
   }
  });
});
