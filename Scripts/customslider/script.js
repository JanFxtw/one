
$(function(){
  var wid, len,cloneSlide;
	var lenSlider = $('.boxSlider').length;
	for(var i=0; i<lenSlider; i++)
	{
		len = $('.boxSlider').eq(i).find('.newSlide').length;
		wid = $('.boxSlider').eq(i).find('.newSlide').width();
		$('.boxSlider').eq(i).find('.slider').css('width',len * wid);
	}

	var timeOut1;
	var timeOut2;
	var timeOut3;
	var timeOut4;
	
	$('.boxSlider .next').click(function(){
		var t = ($(this).parents('.boxSlider').attr('class')).split(' slide')[1];
		clearTimeout( eval('timeOut'+t) );

		var ths =$(this).parents('.sliderWrap').find('.slider');
		if (!ths.is(':animated')) // Avoiding click between Animation
        {
			ths.animate({marginLeft:'-='+wid},500, function(){
				ths.append(ths.parents('.sliderWrap').find('.slider .newSlide').eq(0).clone());					
				ths.children('.newSlide').eq(0).remove();
				ths.css('margin-left',0);
				
			
				t2 = 'timeOut'+t;
				t3 = setTimeout(function(){ $('.slide'+t+' .next').click(); },3500);
				eval(t2 +'='+ t3);
			})
		}
	}).click();
 
	$('.boxSlider .prev').click(function(){
		var t = ($(this).parents('.boxSlider').attr('class')).split(' slide')[1];
		clearTimeout( eval('timeOut'+t) );
		var ths =$(this).parents('.sliderWrap').find('.slider');
		if (!ths.is(':animated')) // Avoiding click between Animation
        {
			ths.prepend(ths.parents('.sliderWrap').find('.slider .newSlide:last').clone());	
			ths.css('margin-left',-wid);
			ths.children('.newSlide:last-child').remove();				
			ths.animate({marginLeft:0},500)
				t2 = 'timeOut'+t;
				t3 = setTimeout(function(){ $('.slide'+t+' .next').click(); },3500);
				eval(t2 +'='+ t3);
		}
	})
 
})
