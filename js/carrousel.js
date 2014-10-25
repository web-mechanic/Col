/*
	CARROUSEL
*/
var carrousel = {

	nbSlide : 0,
	nbCurrent : 1,
	elemCurrent : null,
	elem : null,
	timer : null,

	init : function(elem){
		this.nbSlide = elem.find(".slide").length;
		
		//Créer la pagination
		elem.append('<div class="navigation"></div>');
		for (var i = 1; i <= this.nbSlide; i++) {
			elem.find(".navigation").append("<span>"+i+"</span>");
		}
		elem.find(".navigation span").click(function(){ carrousel.gotoSlide($(this).text()); })

		//Initialisation du carrousel
		this.elem = elem;
		elem.find(".slide").hide();
		elem.find(".slide:first").show();
		this.elemCurrent = elem.find(".slide:first");
		this.elem.find(".navigation span:first").addClass("active");

		//On crée le timer
		carrousel.play();
		//Stop quand on passe dessus
		elem.mouseover(carrousel.stop);
		elem.mouseout(carrousel.play);
	},
	/*
	gotoSlide : function(num){
		if(num==this.nbCurrent){return false;}
		if(num>this.nbCurrent){
			var cssStart = { "left" : this.elem.width()};
			var cssEnd = { "left" : -this.elem.width()};
			this.elem.find("#slide"+num).show().css(cssStart);
			this.elem.find("#slide"+num).animate({"top":0, "left":0},700);
			this.elemCurrent.animate(cssEnd,700);
			this.elem.find(".navigation span").removeClass("active");
			this.elem.find(".navigation span:eq("+(num-1)+")").addClass("active");
			this.nbCurrent = num;
			this.elemCurrent = this.elem.find("#slide"+num);
		}
		else if(num<this.nbCurrent){
			var sens = -1; 
			var cssStart = { "left" : sens*this.elem.width()};
			var cssEnd = { "left" : -sens*this.elem.width()};
			this.elem.find("#slide"+num).show().css(cssStart);
			this.elem.find("#slide"+num).animate({"top":0, "left":0},700);
			this.elemCurrent.animate(cssEnd,700);
			this.elem.find(".navigation span").removeClass("active");
			this.elem.find(".navigation span:eq("+(num-1)+")").addClass("active");
			this.nbCurrent = num;
			this.elemCurrent = this.elem.find("#slide"+num);
		}
	},
	*/

	gotoSlide : function(num){
		if(num==this.nbCurrent){return false;}
		var cssStart = { "left" : this.elem.width()};
		var cssEnd = { "left" : -this.elem.width()};
		this.elem.find("#slide"+num).show().css(cssStart);
		this.elem.find("#slide"+num).animate({"top":0, "left":0},700);
		this.elemCurrent.animate(cssEnd,700);
		this.elem.find(".navigation span").removeClass("active");
		this.elem.find(".navigation span:eq("+(num-1)+")").addClass("active");
		this.nbCurrent = num;
		this.elemCurrent = this.elem.find("#slide"+num);
	},
	
	gotoSlidePrev : function(num){
		if(num==this.nbCurrent){return false;}

		/* Animation en fadein/fadeout
		this.elemCurrent.fadeOut();
		this.elem.find("#slide"+num).fadeIn();
		*/
		/* Animation en slide */
		var sens = -1; /* --> décommenter pour sens inverse*/
		/*if(num<this.nbCurrent){sens = -1;}*/ /* --> décommenter pour sens inverse */
		var cssStart = { "left" : sens*/* --> décommenter pour sens inverse */this.elem.width()};
		var cssEnd = { "left" : -sens*/* --> décommenter pour sens inverse */this.elem.width()};
		this.elem.find("#slide"+num).show().css(cssStart);

		this.elem.find("#slide"+num).animate({"top":0, "left":0},700);
		this.elemCurrent.animate(cssEnd,700);
		this.elem.find(".navigation span").removeClass("active");
		this.elem.find(".navigation span:eq("+(num-1)+")").addClass("active");
		this.nbCurrent = num;
		this.elemCurrent = this.elem.find("#slide"+num);
	},

	next : function(){
		var num = parseInt(this.nbCurrent)+1;
		if(num>this.nbSlide){
			num = 1;
		}
		this.gotoSlide(num);
	},
	prev : function(){
		var num = this.nbCurrent-1;
		if(num<1){
			num = this.nbSlide;
		}
		this.gotoSlidePrev(num);
	},

	stop : function(){
		window.clearInterval(carrousel.timer);
	},

	play : function(){
		window.clearInterval(carrousel.timer);
		carrousel.timer = window.setInterval("carrousel.next()",2500);

	}

}
$(function(){
	carrousel.init($("#carrousel"));
});
$("#carousselnext").click(function(){ carrousel.next(); })
$("#carousselnext").mouseover(function(){ carrousel.stop(); })
$("#carousselnext").mouseout(function(){ carrousel.play(); })
$("#carousselprev").click(function(){ carrousel.prev(); })
$("#carousselprev").mouseover(function(){ carrousel.stop(); })
$("#carousselprev").mouseout(function(){ carrousel.play(); })