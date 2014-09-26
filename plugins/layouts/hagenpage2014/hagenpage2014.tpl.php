<div class="container">

  <div class="cbp-af-header">
    <nav class="row">
      <?php print $content['topbar']; ?>
    </nav>
  </div>
  <section id="header">
    <div class="row">
      <div class="twelve columns centered">
        <?php print $content['header']; ?>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns centered">
        <?php print $content['headerbeta']; ?>
      </div>
    </div>
  </section>

  <section id="ticket">
    <div class="row">
      <div class="twelve columns centered">
        <?php print $content['tickets']; ?>
      </div>
    </div>
  </section>

  <!-- Talks -->
  <div class="row">
    <div class="twelve columns">
      <h3>Talks</h3>
    </div>
  </div>

  <section id="talks">
    <div id="projects_grid" class="row">
      <?php print $content['talks']; ?>
<?php /*
      <ul class="filter">
        <li><a class="active" href="#" data-filter="*">All</a></li>
        <li><a href="#" data-filter=".frontend">Frontend</a></li>
        <li><a href="#" data-filter=".backend">Backend</a></li>
        <li><a href="#" data-filter=".mobile">Mobile</a></li>
      </ul>
      <ul class="items three_up tiles centered">
        <li class="item frontend">
          <a onclick="$('#portfolio1').slideDown(); $('#portfolio2, #portfolio3, #portfolio4, #portfolio5, #portfolio6').slideUp(); $('html, body').animate({scrollTop: $('#portfolio1').offset().top }, 600);"><img src="img/exemple1.jpg" alt="Example">

            <div>
              <h5>Twig</h5>
              <span>Fast: Twig compiles templates down to plain optimized PHP code.</span>
            </div>
          </a></li>
      </ul>
 */ ?>
    </div>

    <?php print $content['talks_details']; ?>
<?php /*
    <div id="portfolio1" class="row slide_portfolio">
      <div class="eight columns centered">

        <img class="closeit" src="img/close.png" alt="Close Project" onclick="$('#portfolio1').slideUp(); $('html, body').animate({scrollTop: $('#talks').offset().top -70 }, 800);">

        <h3>Twig</h3>

        <p>Fruitcake brownie tootsie roll. Danish caramels lemon drops unerdwear.com brownie apple pie halvah. Cotton
          candy jelly danish dragée chocolate bar gummi bears marzipan croissant jelly beans. Dragée muffin brownie
          lemon drops danish croissant caramels topping. Jelly icing cotton candy chocolate. Oat cake pudding sweet roll
          tiramisu soufflé muffin tiramisu fruitcake apple pie. Caramels brownie danish danish fruitcake cake dragée
          biscuit cheesecake. Chocolate cake dragée gummies tiramisu halvah icing ice cream. Applicake jelly-o cake
          gummies cupcake. Jelly-o ice cream macaroon. Marzipan sweet gummies jelly beans lemon drops liquorice halvah.
          Jujubes lollipop halvah gummies macaroon icing chocolate cake. Unerdwear.com macaroon pudding.</p>

        <img src="img/workexemple1.png" alt="EXEMPLE">

        <img src="img/workexemple2.png" alt="EXEMPLE">

      </div>

    </div>
 */ ?>

  </section>
  <section id="interblock">
    <div class="row">
      <div class="nine columns">
        <h2>How do I submit a session?</h2>
        <p>Get in contact with Lars (<a href="https://twitter.com/lslinnet">@lslinnet</a>), Morten (<a href="https://twitter.com/mortendk">@mortendk</a>) or Jens (<a href="https://twitter.com/beltofte">@beltofte</a>) if you have something you think might be interesting!</p>
      </div>

      <div class="three columns buttongo">
        <a href="#schedule"><i class='icon' data-icon="&#xe105;"></i></a>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="twelve columns">
      <h3>Schedule</h3>
    </div>
  </div>
  <section id="schedule">
    <div class="row">
      <ul class="one_up tiles">
        <li class="columns six service">
          <div class="two columns">
            <h3>Time</h3>
            <div>13:00</div>
            <div>14:00 to 18:00</div>
            <div>18:00 to 23:00</div>
          </div>
          <div class="nine columns">
            <h3>Friday</h3>
            <div>Registration opens</div>
            <div> Getting started contributing to Drupal (Drupal Ladder)</div>
            <div>Lightning talks & Evening entertainment</div>
          </div>
        </li>
        <li class="columns six service">
          <div class="two columns">
            <h3>Time</h3>
            <div>09:45 to 10:00</div>
            <div>10:00 to 10:50</div>
            <div>11:00 to 11:50</div>
            <div>12:00 to 12:50</div>
            <div>12:50 to 14:30</div>
            <div>14:30 to 15:20</div>
          </div>
          <div class="nine columns">
            <h3>Saturday</h3>
            <div>Opening Notes</div>
            <div> Getting started contributing to Drupal (Drupal Ladder)</div>
            <div>Lightning talks & Evening entertainment</div>
            <div> Getting started contributing to Drupal (Drupal Ladder)</div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div class="row">
    <div class="twelve columns">
      <h3>Venue</h3>
    </div>
  </div>
  <section id="venue">
    <div class="row venue">
      <div class="six columns">
        <?php print $content['venue_map']; ?>
      </div>
      <div class="six columns centered">
        <?php print $content['venue']; ?>
      </div>
    </div>

  </section>


  <section id="interblock_footer">
    <div class="row">
      <div class="eight columns">
        <h2>Practical information</h2>
        <p>Drupalhagen (Probably the best camp in the world) will be held on Amager at <br> Det
          Informationsvidenskabelige Akademi Birketinget 6 2300 København</p>
      </div>

      <div class="four columns text-right ">
        <ul>
          <li><a href="http://www.facebook.com/silo" target="_blank"><i class="icon" data-icon="&#xe045;"></i></a></li>
          <li><a href="http://www.facebook.com/silo" target="_blank"><i class='icon' data-icon="&#xe033;"></i></a></li>
          <!-- <li><a href="http://www.facebook.com/silo" target="_blank"><i class='icon' data-icon="&#xe047;"></i></a></li> -->
          <!-- <li><a href="http://www.facebook.com/silo" target="_blank"><i class='icon' data-icon="&#xe031;"></i></a></li> -->
        </ul>
      </div>
    </div>

  </section>

  <div class="row">
    <div class="twelve columns">
      <h3>Sponsors</h3>
    </div>
  </div>
  <section id="sponsors" class="row">
    <div class="twelve columns">
      <?php print $content['sponsors']; ?>
    </div>
  </section>

  <section id="contact_info">
    <div class="row">
      <div class="twelve columns">
        <div class="four columns">
          <?php print $content['footer_a']; ?>
        </div>
        <div class="four columns text-center">
          <?php print $content['footer_b']; ?>
        </div>
        <div class="four columns text-right">
          <?php print $content['footer_c']; ?>
          <p>Hosting</p>
          <iframe src="http://content.getpantheon.com/powered-by-pantheon.html" width="140px" height="40px" scrolling="no" border="0" style="border:none;"></iframe>
        </div>
      </div>
    </div>
  </section>
</div>

