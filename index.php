<?php
include 'head.php';
include 'nav.php'; ?>

<div class="to-top">
  <div class="to-top-content"><i class="fa fa-2x fa-angle-up u-pull-left"></i>
    <p>Back to top</p>
  </div>
</div>

<section class="hero">
  <div class="hero-content">
    <img src="img/logo.png">
    <h5>Handcrafted games from Flower Mound, TX</h5>
    <button class="kickstart-button">Kickstart Seasons!</button>
  </div>
</section>

<section id="seasons" class="seasons">
  <div class="u-full-width">
    <div class="container">
      <div class="row">
        <div class="six columns">
          <img id="seasons-img" src="http://unsplash.it/900/600?random=2" class="seasons-img u-max-full-width">
        </div>

        <div class="six columns description">
          <h3>Seasons</h3>
          <hr>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eos quae velit commodi numquam inventore atque error autem doloribus hic fuga veniam obcaecati possimus enim architecto, voluptatem consectetur cum cumque ipsam culpa tenetur deleniti.</p>
          <button class="kickstart-button">Kickstart the game</button>
          <button>Join the Forum</button>
        </div>
      </div>
      <?php include 'newsfeed.php'; ?>
    </div>
  </div>
</section>

<section id="company" class="company u-full-width">
  <h3>Company</h3>

  <div class="container">
    <div class="row">
      <div class="eight columns offset-by-two">
        <p>We are Faux Fox Studios, an indie game company based in Flower Mound, Texas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, minima autem. Nesciunt dolorum repudiandae est rerum iure placeat aperiam eaque et praesentium! Qui, ut explicabo, vel harum fugit perferendis nostrum.dd </p>
      </div>
    </div>
    <hr>
    <div class="row twitter-row">
      <div class="eight columns">
        <img src="http://unsplash.it/900/600?random=1" class="u-max-full-width">
      </div>

      <div class="four columns">
        <a href="https://twitter.com/FauxFoxStudios" data-widget-id="627253419963604992" data-chrome="noborders  noscrollbar" class="twitter-timeline">Tweets by @FauxFoxStudios</a>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact u-full-width">
  <h3>Contact</h3>

  <div class="container">
    <div class="row">
      <div class="eight columns offset-by-two">
        <p>
          If you have any questions or comments about our upcoming games, drop us a line below and we will get back to you soon.
        </p>
      </div>
    </div>
    <hr>
    <div class="row form">
      <div class="eight columns offset-by-two">
        <form>
          <div class="form-group six columns">
            <label for="sender">Your Name</label>
            <input type="text" name="sender" id="sender" class="u-full-width">
          </div>

          <div class="form-group six columns">
            <label for="email">Your Email</label>
            <input type="email" name="email" id="email" class="u-full-width">
          </div>

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="u-full-width">
          </div>

          <div class="form-group">
            <label for="email">Your Message</label>
            <textarea name="message" id="message" class="u-full-width"></textarea>
          </div>

          <input type="submit" name="submit" value="Send Message" class="submit-button">
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
