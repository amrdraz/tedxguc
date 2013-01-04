# /js/coffee_draw.coffee

  # Our main sketch object:
  coffee_draw = (p5) ->  

    # processing's "init" method:

    p5.setup = () ->
      p5.size($(window).width(), $(window).height())
      p5.background(0)
      p5.frameRate(240)
      
      # create an array to store our "beans"
      # (to be created below)
      @beans = []

    # lets make a "brush"
    p5.draw = () ->

      x_off = p5.frameCount * 0.0005
      y_off = x_off + 20

      x = p5.noise(x_off) * p5.width
      y = p5.noise(y_off) * p5.height

      # we have beans now, we don't need to draw the brush 
      # p5.stroke(255, 0, 0, 15)
      # p5.point(x, y)

       # it used to every 20 frames, but let's try 8
      if p5.frameCount % 5 == 0
        bean = new Bean(p5, {
          x: x
          y: y
          x_off: x_off
          y_off: y_off
        })
        @beans.push(bean)

      # go through the list of "@beans" and draw them

      # <3 CoffeeScript
      bean.draw() for bean in @beans
      

  # a helper class that will come into play soon
  class Bean
    # when creating a new bean instance
    # we'll pass in a reference to processing

    # and an options object
    constructor: (@p5, opts) ->
      # set the initial values for bean's attributes
      @x = opts.x
      @y = opts.y

      @x_off = opts.x_off
      @y_off = opts.y_off

      @vel = opts.vel || 3

      @accel = opts.accel || -0.003

    # we'll call this once per frame, just like our main
    # object's draw() method
    draw: () ->

      # only do the following if we have positive velocity
      return unless @vel > 0

      # increment our noise offsets

      @x += @p5.noise(@x_off) * @vel - @vel/2
      @y += @p5.noise(@y_off) * @vel - @vel/2

      # we'll be setting the color with the set_color() method
      # so delete or comment our previous call to stroke()
      # @p5.stroke(250, 0, 0, 3)

      # replacing it with a call to set_color():
      @set_color()

      @p5.point(@x, @y)

    set_color: () ->

      # we're primarily interested in changing the hue
      # of the draw color, therefore we make our lives
      # easier by setting the color mode to HSB
      @p5.colorMode(@p5.HSB, 100, 100, 100)

      # the hue will now be a function of our good friend

      # noise, and the average of the x and y offsets
      h = @p5.noise((@x_off+@y_off)/2)*360

      # change these according to taste

      s = 100
      b = 100
      a = 4

      # and set the stroke
      @p5.stroke(h, s, b, a)

  # wait for the DOM to be ready, 
  # create a processing instance...
  $(document).ready ->
    canvas = document.getElementById "processing"

    processing = new Processing(canvas, coffee_draw)