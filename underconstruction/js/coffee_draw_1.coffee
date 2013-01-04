# /js/coffee_draw.coffee

  # Our main sketch object:
  coffee_draw = (p5) ->  

    # processing's "init" method:

    p5.setup = () ->
      p5.size($(window).width(), $(window).height())
      p5.background(0)

    # where the fun stuff happens:
    p5.draw = () ->
      # to make sure everything's working

      # let's do a quick test:

      # set the value of the background equal
      # to the sketch's current frame count
      # and the whole canvas will pulse different colors
      p5.background(p5.frameCount)


  # a helper class that will come into play soon

  class Bean
    constructor: (p5, opts) ->  

  # wait for the DOM to be ready, 
  # create a processing instance...
  $(document).ready ->
    canvas = document.getElementById "processing"

    processing = new Processing(canvas, coffee_draw)