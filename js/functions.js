
// remap jQuery to $
(function($){})(window.jQuery);

/* trigger when page is ready */
$(document).ready(function (){
	var tweets = $('#tweets');
	if(tweets.length!==0){
		/*
		                     twttr.anywhere(function (T) {
		                       T("#tweet").hovercards({ expanded: true });
		                     });
		//*/
		$.getJSON(baseUrl+'cache/twitter-json.txt', function(data){
			$.each(data, function(index, item){
				tweets.append('<div class="tweet">'+
					'<span class="time">' + item.created_at.substr(4, 6) + '</span>' +
					'<div class="tweet-content" >' +
					//  '<img class="profile_icon" src="'+imgRoot+'twitter/scf_2012.jpg" alt="Twitter" display="none">' +
					item.text.linkify() +
					'</div>' +
					//'<div class="web_intent">'  +
					//'<img src="'+imgRoot+'twitter/retweet_mini.png" width="16" height="16" alt="Retweet">' + 
					//'<a href="http://twitter.com/intent/retweet?tweet_id=' + item.id_str + '">' + 'Retweet</a>' + 
					//'<img src="'+imgRoot+'twitter/reply_mini.png" width="16" height="16" alt="Reply">' +
					//'<a href="http://twitter.com/intent/tweet?in_reply_to=' + item.id_str + '">' + 'Reply</a>' + 
					//'<img src="'+imgRoot+'twitter/favorite_mini.png" width="16" height="16" alt="Favorite">' +
					//'<a href="http://twitter.com/intent/favorite?tweet_id=' + item.id_str + '">' + 'Favorite</a>' +
					//'</div>'+
					'</div>'
				);
			});
		});
	}



	// pass in the 'created_at' string returned from twitter //
	// stamp arrives formatted as Tue Apr 07 22:52:51 +0000 2009 //
	function parseTwitterDate($stamp)
	{		
	// convert to local string and remove seconds and year //		
		var date = new Date(Date.parse($stamp)).toLocaleString().substr(0, 16);
	// get the two digit hour //
		var hour = date.substr(-5, 2);
	// convert to AM or PM //
		var ampm = hour<12 ? ' AM' : ' PM';
		if (hour>12) hour-= 12;
		if (hour==0) hour = 12;
	// return the formatted string //
		return date.substr(0, 11)+' • ' + hour + date.substr(13) + ampm;
	}

	function relative_time(time_value) {
		var values = time_value.split(" ");
		time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
		var parsed_date = Date.parse(time_value);
		var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
		var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
		delta = delta + (relative_to.getTimezoneOffset() * 60);

		var r = '';
		if (delta < 60) {
			r = 'a minute ago';
		} else if(delta < 120) {
			r = 'couple of minutes ago';
		} else if(delta < (45*60)) {
			r = (parseInt(delta / 60)).toString() + ' minutes ago';
		} else if(delta < (90*60)) {
			r = 'an hour ago';
		} else if(delta < (24*60*60)) {
			r = '' + (parseInt(delta / 3600)).toString() + ' hours ago';
		} else if(delta < (48*60*60)) {
			r = '1 day ago';
		} else {
			r = (parseInt(delta / 86400)).toString() + ' days ago';
		}

		return r;
	}

	//ajax for subscribe button
     $('#subscribe-submit').click(function(){
       var that = $(this), form = that.parent('form');
       $.post(baseUrl+'subscribe/add',form.serialize(),function(data){
           $(that.children()[0]).text(data);
       });
       return false;
    });
});

String.prototype.linkify = function() {
       return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/, function(m) {
              return m.link(m);
      });
};