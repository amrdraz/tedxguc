//http://zreference.com/raphael-animation-along-a-path/
(function() {
  Raphael.fn.addGuides = function() {
    this.ca.guide = function(g) {
      return {
        guide: g
      };
    };
    this.ca.along = function(percent) {
      var g = this.attr("guide"),
          len = g.getTotalLength(),
          point = g.getPointAtLength(percent * len),
          m = this.matrix.split(),
          t = {
            transform:  [
                    ['R', m.rotate],
                    ['S', m.scalex, m.scaley],
                    ['T', point.x||0, point.y||0]]
          };
      return t;
    };
  };
  Raphael.el.addGuide = function(g) {
      this.attr({"guide":g, "along":0});
      return this;
  };
  Raphael.el.hideGuide = function() {
      this.attr("guide").hide();
      return this;
  };
  Raphael.el.showGuide = function() {
      this.attr("guide").show();
      return this;
  };
  Raphael.el.stepGuide = function (step) {
      
    var el = this,
        g = this.attr("guide"),
        max = g.getTotalLength(),
        percent = el.attr("along"),
        len = limitWithin((percent * max) + step, 0, max);
      
      //console.log("step",step,"max",max, "length",len );
      el.attr("along", len/max);
      
      return {len:len,max:max,percent:percent};
  };
})();