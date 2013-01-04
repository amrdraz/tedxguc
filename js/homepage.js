
// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	var
	stage = $("#container"),
	intro = $("#intro"),
	conclusion = $("#conclusion"),
	width = $(window).width(),
	center = width/2,
	middle = height/2,
	height = $(window).height(),
	r = Raphael("play","100%","100%"),
	playLength = 15600,
	currentStep = 0,
	comonTextAttr = {"font-family":"Lato, Helvetica, Arial, sans-serif","font-weight": 100,"fill":"#fff","font-size":25,"text-anchor": "start"};
	comonTextAttr2 = {"font-family":"Lato, Helvetica, Arial, sans-serif","font-weight": 300,"fill":"#fff","font-size":25,"text-anchor": "start"};

	//add path trace feature
	r.addGuides();
	guids = drawGuids(r, center, height);
	var obj ={  
	    tree: r.image().attr({
	        "width": 350,
	        "height": 475,
	        "src": homepageImg+"tree.gif",
	        guide: guids["tree"],
	        along:0
	       }),
	    text1a: r.text().attr(comonTextAttr2).attr({
	    	text:"IDEAS CAME TO LIFE",
	    	 guide:guids["text1a"],
	        along:0
	    }),
	    text1b: r.text().attr(comonTextAttr2).attr({
	    	text:"WHEN WE CAME TO CONSCIOUSNESS",
	    	 guide:guids["text1b"],
	        along:0
	    }),
	    text2a: r.text().attr(comonTextAttr2).attr({
	    	text:"A SIMPLE IDEA",
	    	 guide:guids["text2a"],
	        along:0
	    }),
	    text2b: r.text().attr(comonTextAttr2).attr({
	    	text:"CAN HAVE A GREAT EFFECT",
	    	 guide:guids["text2b"],
	        along:0
	    }),
	    apple: r.image().attr({
	        "width": 27,
	        "height": 24,
	        "src": homepageImg+"Apple.png",
	        guide: guids["apple"],
	        along:0
	       }),
	    newton: r.image().attr({
	        "width": 293,
	        "height": 418,
	        "src": homepageImg+"earth.gif",
	        transform:"T "+(center-370)+" "+(height+10)
	        //guide:guids["newton"],
	        //along:0
	       }),
	    text3a: r.text().attr(comonTextAttr2).attr({
	    	text:"WHEN IT MEETS",
	    	 guide:guids["text3a"],
	        along:0
	    }),
	    text3b: r.text().attr(comonTextAttr2).attr({
	    	text:"THE RIGHT PERSON",
	    	 guide:guids["text3b"],
	        along:0
	    }),
	    text4a: r.text().attr(comonTextAttr2).attr({
	    	text:"BUT WHAT'S",
	    	 guide:guids["text4a"],
	        along:0
	    }),
	    text4b: r.text().attr(comonTextAttr2).attr({
	    	text:"EVEN MORE POWERFUL",
	    	 guide:guids["text4b"],
	        along:0
	    }),
	    rocket: r.image().attr({
	        "width": 60,
	        "height": 40,
	        "src": homepageImg+"rocket.gif",
	        transform:"T "+(center-70)+" "+(middle),
	        opacity:0
	        //guide:guids["rocket"],
	        //along:0
	       }),
	    text5a: r.text().attr(comonTextAttr2).attr({
	    	text:"IS WHEN",
	    	 guide:guids["text5a"],
	        along:0
	    }),
	    text5b: r.text().attr(comonTextAttr2).attr({
	    	text:"IDEAS COME TOGETHER",
	    	 guide:guids["text5b"],
	        along:0
	    }),
	    satelite: r.image().attr({
	        "width": 400,
	        "height": 135,
	        "src": homepageImg+"satelite.gif",
	        guide:guids["satelite"],
	        along:0
	    }),
	    text6a: r.text().attr(comonTextAttr2).attr({
	     	"text-anchor":"middle",
	    	text:"TED WAS FOUNDED WITH THE MISSION OF",
	    	guide:guids["text6a"],
	        along:0
	    }),
	    text6b: r.text().attr(comonTextAttr2).attr({
	     	"text-anchor":"middle",
	    	text:"IDEAS WORTH SPREADING",
	    	guide:guids["text6b"],
	        along:0
	    }),
	    camera: r.image().attr({
	        "width": 100,
	        "height": 75,
	        "src": homepageImg+"camera.gif",
	        guide:guids["camera"],
	        along:0
	    }),
	    pencil: r.image().attr({
	        "width": 50,
	        "height": 250,
	        "src": homepageImg+"pencil.gif",
	        guide:guids["pencil"],
	        along:0
	    }),
	    text7a: r.text().attr(comonTextAttr2).attr({
	     	"text-anchor":"middle",
	    	text:"GATHERING INTELLECTUALS TO SHARE IDEAS",
	    	guide:guids["text6a"],
	        along:0
	    }),
	    text7b: r.text().attr(comonTextAttr2).attr({
	     	"text-anchor":"middle",
	    	text:"IN TECHNOLOGY ENTERTAINMENT AND DESIGN",
	    	guide:guids["text6b"],
	        along:0
	    }),
	    car: r.image().attr({
	        "width": 200,
	        "height": 150,
	        "src": homepageImg+"car.gif",
	        guide:guids["car"],
	        along:0
	    }),
	    usb: r.image().attr({
	        "width": 170,
	        "height": 155,
	        "src": homepageImg+"usb.gif",
	        guide:guids["usb"],
	        along:0
	    }),
	    invention: r.image().attr({
	        "width": 400,
	        "height": 300,
	        "src": homepageImg+"invention.gif",
	        guide:guids["invention"],
	        along:0
	    }),
	    text8a: r.text().attr(comonTextAttr2).attr({
	    	text:"TED TALKS",
	    	guide:guids["text8a"],
	        along:0
	    }),
	    text8b: r.text().attr(comonTextAttr2).attr({
	    	text:"HAVE TRAVELLED THE WORLD",
	    	guide:guids["text8b"],
	        along:0
	    }),
	    text9a: r.text().attr(comonTextAttr2).attr({
	    	text:"GLOBALIZING IDEAS",
	    	guide:guids["text9a"],
	        along:0
	    }),
	    text9b: r.text().attr(comonTextAttr2).attr({
	    	text:"AND CHANGING LIVES",
	    	guide:guids["text9b"],
	        along:0
	    }),
	    text10: r.text().attr(comonTextAttr2).attr({
	     	"text-anchor":"middle",
	    	text:"BUT MANY IDEAS ARE YET TO FIND LIGHT...",
	    	guide:guids["text10"],
	        along:0
	    }),
	    text11: r.text().attr(comonTextAttr2).attr({
	     	"text-anchor":"middle",
	    	text:"AND THIS IS THE PURPOSE BEHIND TEDxGUC",
	    	guide:guids["text11"],
	        along:0
	    }),
	    text12a: r.text().attr(comonTextAttr2).attr({
	    	text:"A TEAM OF BRIGHT STUDENTS"
	    }).addGuide(guids["text12a"]),
	    text12b: r.text().attr(comonTextAttr2).attr({
	    	text:"EAGER TO SHARE INSPIRATION AND IDEAS"
	    }).addGuide(guids["text12b"]),
	    text13a: r.text().attr(comonTextAttr2).attr({
	    	text:"WE BELIEVE EVERY COMMUNITY"
	    }).addGuide(guids["text13a"]),
	    text13b: r.text().attr(comonTextAttr2).attr({
	    	text:"HAS UNIQUE STORIES TO TELL"
	    }).addGuide(guids["text13b"]),
	    text14: r.text().attr(comonTextAttr2).attr({
	     	"text-anchor":"middle",
	    	text:"SO JOIN US!"
	    }).addGuide(guids["text14"]),
    };

    makeAnim(obj, center,height);
	
    stage.css("height", playLength+height*5);
	/* Handles animation */
	function stepTo(step) {
		var pos, start, dest;
	    //$( window ).scrollTop( 0 ).scrollLeft( 0 );
	    start = 2*height;
	    dest = start*2;
	   	// if(step<=dest) {
		    pos = limitWithin((step/dest)*-dest, -dest, 0);
		    intro.css("top", pos);
		    //console.log(dest, pos);
	   	// }
	//   	if(step>=dest-60) {
		//run animations
		$.each(obj, function (i,val) {
			stepAnim(val, step);
		});
		//console.log(step-dest-150);
	  // 	}
	//	if(step>start+playLength) {
			dest = height+10;
		    pos = limitWithin(dest - (((step-(start+playLength))/dest)*(dest))/2, 0, dest);
		    conclusion.css("top", pos);
		//    console.log(dest, pos);
	  // 	} 
	}

	$(window).resize(function(){
		console.log(width, center, height);
	
		width = $(window).width();
		height = $(window).height();
		center = width/2;
		//console.log(width, center, height);
	
		obj = updateGuids(obj,center,height);
		makeAnim(obj, center,height);
		stepTo(currentStep);
	});

	$('html').niceScroll();
    $(document).scroll(function(){
        var docScroll = $(document).scrollTop();
        stepTo(docScroll);
        scrollspeed : 10
    }); 
    
    //ajax for subscribe button
     $('#subscribe-submit').click(function(){
       var that = $(this), form = that.parent('form');
       $.post(baseUrl+'subscribe/add',form.serialize(),function(data){
           $(that.children()[0]).text(data);
       });
       return false;
    });
});

function setAnim(el,anims,start,end){
	var anim, obj = {};
	$.each(anims, function(i, val){
		obj[(i/end)*100] = val;
	});
	el.start = start;
	el.end = end;
	el.a = Raphael.animation(obj,end);
	//console.log(el.a);
}

function stepAnim(el, step){
	//console.log("el",el.end, step, el.start);
	//if(step<(el.start+el.end+150) && step > (el.start-150)){
		el.status(el.a, limitWithin(step-el.start,0.001,el.end)/el.end);
	//}
}
/* Limits a given value between a lower and upper limit */
function limitWithin( value, lowerLimit, upperLimit ) {
	if ( value > upperLimit ) {
		return upperLimit;
	} else if ( value < lowerLimit ) {
		return lowerLimit;
	}
	return value;
}

function drawGuids(r, center, height) {
	var paths = makePath(center,height);

	var obj ={};
	$.each(paths, function(i,val){
		obj[i] = r.path(val).hide();
	});

    return obj
}

function updateGuids(obj, center, height) {

	var paths = makePath(center,height);

	$.each(obj, function(i,val){
		if(val.attr("guide")){
			val.attr("guide").attr("path",paths[i]);
			//val.attr("along", val.attr("along"));
		}
	});

    return obj
}

function makePath(center,height){

	var 
	middle = height/2,
	bottom = height+50,
	obj ={  
	    tree: [
                ["M", center-420, middle-252],
                ["L", center-420, -500]
            ],
	    text1a: [
                ["M", center-10, middle-215],
                ["L", center-10, -495]
            ],
        text1b: [
                ["M", center-8, middle-189],
                ["L", center-8, -469]
            ],
        text2a: [
                ["M", center-8, bottom-25],
                ["L", center-8, -450]
            ],
        text2b: [
                ["M", center-8, bottom],
                ["L", center-8, -425]
            ],
	    apple: [
                ["M", center-135, middle-197],
                ["C", center-135,  middle-355, center+10,  middle-285, center+10,  middle+150],
                ["L", center+15,bottom]
            ]/*,
	    
	    newton: [
                ["M", center-370, height+10],
                ["L", center-370, -418]
            ]
            */,
        text3a: [
                ["M", center+130, bottom],
                ["L", center+130, -475]
            ],
        text3b: [
                ["M", center+130, bottom+25],
                ["L", center+130, -450]
            ],
        text4a: [
                ["M", center+100, bottom],
                ["L", center+100, -475]
            ],
        text4b: [
                ["M", center+100, bottom+25],
                ["L", center+100, -450]
            ],
        text5a: [
                ["M", center+100,bottom],
                ["L", center+100, -470]
            ],
        text5b: [
                ["M", center+100,bottom+25],
                ["L", center+100, -450]
            ],
        satelite: [
                ["M", center+70, bottom+100],
                ["L", center+70, -450]
            ],
        text6a: [
                ["M", center, bottom],
                ["L", center, -475]
            ],
        text6b: [
                ["M", center, bottom+25],
                ["L", center, -450]
            ],
        camera: [
                ["M", center+290, bottom],
                ["L", center+290, -550]
            ],
        pencil: [
                ["M", center-370, bottom],
                ["L", center-370, -450]
            ],
        text7a: [
                ["M", center, bottom],
                ["L", center, -475]
            ],
        text7b: [
                ["M", center, bottom+25],
                ["L", center, -450]
            ],
        car: [
                ["M", center+270, bottom],
                ["L", center+270, -450]
            ],
        usb: [
                ["M", center-400, bottom],
                ["L", center-400, -450]
            ],
        invention: [
                ["M", center-400, bottom],
                ["L", center-400, -450]
            ],
        text8a: [
                ["M", center+30, bottom],
                ["L", center+30, -475]
            ],
        text8b: [
                ["M", center+30, bottom+25],
                ["L", center+30, -450]
            ],
        text9a: [
                ["M", center-400, bottom],
                ["L", center-400, -475]
            ],
        text9b: [
                ["M", center-400, bottom+25],
                ["L", center-400, -450]
            ],
        text10: [
                ["M", center, bottom],
                ["L", center, -450]
            ],
        text11: [
                ["M", center, bottom],
                ["L", center, -450]
            ],
        text12a: [
                ["M", center-350, bottom],
                ["L", center-350, -475]
            ],
        text12b: [
                ["M", center-350, bottom+25],
                ["L", center-350, -450]
            ],
        text13a: [
                ["M", center+0, bottom],
                ["L", center+0, -475]
            ],
        text13b: [
                ["M", center+0, bottom+25],
                ["L", center+0, -450]
            ],
        text14: [
                ["M", center, bottom],
                ["L", center, -450]
            ]
    };
    
    return obj
}

function makeAnim(obj, center,height){

	var start = 2*height - 150, end = 3000, middle = height/2, x, y;

	setAnim(obj.tree,{0:{along:0}, 3000:{along:1}},start, end);
    setAnim(obj.text1a,{0:{along:0}, 3000:{along:1}}, start, end);
    setAnim(obj.text1b,{0:{along:0}, 3000:{along:1}}, start, end);
	setAnim(obj.text2a,{0:{along:0}, 4000:{along:1}}, start+300, 3500);
	setAnim(obj.text2b,{0:{along:0}, 4000:{along:1}}, start+300, 3500);
//console.log("apple");
    setAnim(obj.apple,{
    0:{transform:"R 0", along:0}, 
    2000:{transform:"R 180", along:1}}, 
    start+3200, 1000);

    x = center-325;
    setAnim(obj.newton,{
    	0:{transform:"T "+x+" "+(height+10)},
    	1900:{transform:"T "+x+" "+(middle-180)},
    	6500:{transform:"T "+x+" "+(middle-180)},
    	9400:{transform:"T "+x+" "+(-418)}},
    	start+1000, 9400);
    setAnim(obj.text3a,{0:{along:0}, 1500:{along:1}}, start+3300, 2250);
    setAnim(obj.text3b,{0:{along:0}, 1500:{along:1}}, start+3300, 2250);
    setAnim(obj.text4a,{0:{along:0}, 1500:{along:1}}, start+5400, 2250);
    setAnim(obj.text4b,{0:{along:0}, 1500:{along:1}}, start+5400, 2250);
    y = (middle);
    x = (center+200)/3;
    setAnim(obj.rocket,{
    	0:{opacity:0,transform:"R 15 T "+(center-120)+" "+(y+10)+" S 0.5"},
    	800:{opacity:1,transform:"R 15 T "+(center+x)+" "+(y-100)+" S 1.5"},
    	1500:{opacity:1,transform:"R 15 T "+(center+2*x)+" "+(y-200)+" S 2"},
    	2250:{opacity:1,transform:"R 15 T "+(center+3*x)+" "+(y-300)+" S 2.5"}
    }, start+6300, 2250);

    setAnim(obj.text5a,{0:{along:0}, 2500:{along:1}}, start+6600, 3750);
    setAnim(obj.text5b,{0:{along:0}, 2500:{along:1}}, start+6600, 3750);

    setAnim(obj.satelite,{0:{along:0}, 2200:{along:1}}, start+8450, 3450);

    setAnim(obj.camera,{0:{along:0}, 2450:{along:1}}, start+9200, 3975);
    setAnim(obj.text6a,{0:{along:0}, 2600:{along:1}}, start+9400, 3900);
    setAnim(obj.text6b,{0:{along:0}, 2600:{along:1}}, start+9400, 3900);
    setAnim(obj.pencil,{0:{along:0}, 2300:{along:1}}, start+9300, 2850);

    setAnim(obj.car,{0:{along:0}, 2300:{along:1}}, start+10200, 2800);
    setAnim(obj.text7a,{0:{along:0}, 2600:{along:1}}, start+10700, 3900);
    setAnim(obj.text7b,{0:{along:0}, 2600:{along:1}}, start+10700, 3900);
    setAnim(obj.usb,{0:{along:0}, 2500:{along:1}}, start+10100, 3300);

    setAnim(obj.invention,{0:{along:0}, 2300:{along:1}}, start+11700, 2850);
    setAnim(obj.text8a,{0:{along:0}, 2600:{along:1}}, start+12100, 3750);
    setAnim(obj.text8b,{0:{along:0}, 2600:{along:1}}, start+12100, 3750);
    setAnim(obj.text9a,{0:{along:0}, 2600:{along:1}}, start+12600, 3750);
    setAnim(obj.text9b,{0:{along:0}, 2600:{along:1}}, start+12600, 3750);

    setAnim(obj.text10,{0:{along:0}, 2600:{along:1}}, start+13350, 3750);

    setAnim(obj.text11,{0:{along:0}, 2600:{along:1}}, start+14100, 3750);
    setAnim(obj.text12a,{0:{along:0}, 2600:{along:1}}, start+14400, 3750);
    setAnim(obj.text12b,{0:{along:0}, 2600:{along:1}}, start+14400, 3750);

    setAnim(obj.text13a,{0:{along:0}, 2600:{along:1}}, start+14700, 3750);
    setAnim(obj.text13b,{0:{along:0}, 2600:{along:1}}, start+14700, 3750);
    setAnim(obj.text14,{0:{along:0}, 2600:{along:1}}, start+15150, 3750);
}