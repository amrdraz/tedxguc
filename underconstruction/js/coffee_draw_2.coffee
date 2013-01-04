# /js/coffee_draw.coffee

  # Our main sketch object:
  coffee_draw = (p5) ->  

    # processing's "init" method:

    p5.setup = () ->
      p5.size($(window).width(), $(window).height())
      p5.background(0)
      p5.frameRate(240)

     # got rid of the test code

    # lets make a "brush"
    p5.draw = () ->

      # noise() needs an "offset" argument
      # we'll tie it to the frame count
      x_off = p5.frameCount/2 * 0.0005
      x2_off = p5.frameCount/2+1 * 0.0005

      # we want y's offset to increase at the same rate
      # but be different (20 is arbitrary)
      y_off = x_off + 20
      y2_off = x2_off + 20

      # use noise(), the offset, and our sketch's dimensions
      # to get a "random" position for our "brush"

      x = p5.noise(x_off) * p5.width
      y = p5.noise(y_off) * p5.height
      
      x2 = p5.noise(x2_off) * p5.width
      y2 = p5.noise(y2_off) * p5.height

      # color our brush (red with 15% opacity)
      p5.stroke(255, 0, 0, 15)
      p5.strokeWeight(p5.noise(0.5)*2);

      # draw at brush's current location (set above)
      p5.point(x, y)
      p5.point(x2, y2)
      

  # a helper class that will come into play soon

  class Bean
    constructor: (p5, opts) ->  

  # wait for the DOM to be ready, 
  # create a processing instance...
  $(document).ready ->
    canvas = document.getElementById "processing"

    processing = new Processing(canvas, coffee_draw)