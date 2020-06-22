<!doctype html>
<html>

  <head>
    <title> UniFinder </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css" >
  </head>

  <body>
    <a href="/"><span class="Name">UniFinder</span></a>

    <div class="background">
      <span class="title"> Have something to ask? Send us a message</span>
      <form action="{{ action('Controller@insert')}}" method="post">
        {{ csrf_field() }}
      <input type="email" class="email" name="UserEmail" placeholder="Your Email Address">
      <textarea class="message" name="UserMessage" placeholder="Your Message"></textarea>
      <input type="submit" name="submit" class="submit" id="sumbit_btn" value="Send Message">

    </form>

    </div>

  </body>

</html>
