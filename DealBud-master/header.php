<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
  <meta name="description" content="AI technology to generate more sales">
  <meta name="keywords" content="Dealbuddy, Sales, Dealbuddy.com, AI">
  <title>Welcome to DealBuddy</title>
  <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body id="home">
  <header class="hero <?php if(is_page('demo')) { echo 'request'; } ?> ">
    <div id="navbar" class="navbar top">
      
      <div class="logo">
        <?php
            // Render logo or site name
            if (function_exists('the_custom_logo')) {
              if(has_custom_logo()) {
                  the_custom_logo();
              } else {
                  echo '<h1 class="logo"><span class="text-primary"><i class="fas fa-tags"></i>Deal</span>Buddy</h1>';
              }
            }
            ?>
      </div>

      <nav class="main-menu">
        <a href="" onClick=event.preventDefault() id="main-menu-toggle">
          <svg viewBox="0 0 100 80" width="40" height="40">
              <rect width="80" height="10"></rect>
              <rect y="25" width="80" height="10"></rect>
              <rect y="50" width="80" height="10"></rect>
          </svg>
        </a>

        <ul id="menu-main-menu">
          <?php
            // Only show Home nav link on 'demo' page 
            if(is_page('demo')) { ?>
              <li><a href="<?php echo home_url()?>">HOME</a></li>
            <?php }
            if(!is_page('demo')) { ?>
              <li><a href="#cases">CASES</a></li>
              <li><a href="#how">HOW</a></li>
              <li><a href="#who">WHO</a></li>
              <li><a href="#request-demo">Request A Demo</a></li>
              <li><a href="#contact">Contact Us</a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
