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
      <div class="six columns centered valign">
        <?php print $content['tickets']; ?>
      </div>
    </div>
  </section>

  <?php if (!empty($content['talks'])) : ?>
  <!-- Talks -->
  <div class="row">
    <div class="twelve columns">
      <h3>Talks</h3>
    </div>
  </div>

  <section id="talks">
    <div id="projects_grid" class="row">
      <?php print $content['talks']; ?>
    </div>

    <?php print $content['talks_details']; ?>
  </section>
  <?php endif; ?>
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
          <div class="three columns">
            <h3>Time</h3>
            <div>12:45</div>
            <div>13:00</div>
            <div>15:00</div>
            <div>15:15</div>
            <div>18:00-20:00</div>
          </div>
          <div class="eight columns">
            <h3>Friday</h3>
            <div>Deltager ankomst</div>
            <div>Sessions</div>
            <div>Pause med kaffe/te hjemmebagt kage</div>
            <div>Sessions</div>
            <div>Fredagsbar ved Drupal Leverandørforeningen</div>
          </div>
        </li>
        <li class="columns six service">
          <div class="three columns">
            <h3>Time</h3>
            <div>09.45</div>
            <div>10.00</div>
            <div>12.00</div>
            <div>12.30</div>
            <div>15.00</div>
            <div>15:15</div>
            <div>18.00</div>
          </div>
          <div class="eight columns">
            <h3>Saturday</h3>
            <div>Deltager ankomst inkl. croissant og kaffe</div>
            <div>Sessions</div>
            <div>Frokost</div>
            <div>Sessions</div>
            <div>Kaffe/te med hjemmebagt kage</div>
            <div>Sessions</div>
            <div>Afslutning</div>
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
        <p>Will be updated soon'ish!</p>
      </div>

      <div class="four columns text-right ">
        <ul>
          <li><a href="https://www.facebook.com/drupaldanmark" target="_blank"><i class="icon" data-icon="&#xe045;"></i></a></li>
          <li><a href="https://twitter.com/drupalcamp" target="_blank"><i class='icon' data-icon="&#xe033;"></i></a></li>
        </ul>
      </div>
    </div>

  </section>

  <div class="sponsors">
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
  </div>

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

