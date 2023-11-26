<?php

get_header();

$s1_headline = get_field('s1_headline');
$s1_text = get_field('s1_text');
$s1_image = get_field('s1_image');
$s1_pattern = get_field('s1_pattern');

$s2_image = get_field('s2_image');
$s2_pattern = get_field('s2_pattern');
$s2_text = get_field('s2_text');
$s2_button = get_field('s2_button');
$s2_slideout = get_field('s2_slideout');

$s3_quote = get_field('s3_quote');
$s3_attribution = get_field('s3_attribution');

$s4_image = get_field('s4_image');
$s4_pattern = get_field('s4_pattern');
$s4_text = get_field('s4_text');
$s4_button = get_field('s4_button');
$s4_slideout = get_field('s4_slideout');

$s5_headline = get_field('s5_headline');
$s5_text = get_field('s5_text');
$s5_list = get_field('s5_list');
$s5_image = get_field('s5_image');
$s5_pattern = get_field('s5_pattern');

$s6_quote = get_field('s6_quote');
$s6_attribution = get_field('s6_attribution');

$s7_headline = get_field('s7_headline');
$s7_list = get_field('s7_list');

$s8_headline = get_field('s8_headline');
$s8_pattern = get_field('s8_pattern');
$s8_columns = get_field('s8_columns');

?>
<div id="main">
  <section id="sec__001">
    <!-- top section-->
    <?php if ($s1_pattern): ?>
      <div class="pattern-1" style="background-image: url(<?php echo "'" . $s1_pattern["url"] . "'";?>)"></div>
    <?php endif; ?>
    <div class="col-1">
      <?php if ($s1_headline): ?>
        <h1 class="topline"><?php echo $s1_headline; ?></h1>
      <?php endif; ?>

      <?php if ($s1_text): ?>
      <div class="tag-2">
        <h3><?php echo $s1_text; ?></h3>
      </div>
      <?php endif; ?>
    </div>

    <?php if ($s1_image): ?>
      <div class="col-2">
        <div class="photo-1"><img src="<?php echo $s1_image['url']; ?>" /></div>
      </div>
    <?php endif; ?>
  </section>
  <a id="about"></a>

  <section id="sec__002" class="has-slideout">
    <!-- handcrafted section-->
    <?php if ($s2_pattern): ?>
      <div class="pattern-2" style="background-image: url(<?php echo "'" . $s2_pattern["url"] . "'";?>)"></div>
    <?php endif; ?>
    <div class="col-1">
      <?php if ($s2_image): ?>
        <div class="photo-2">
          <img src="<?php echo $s2_image['url']; ?>" />
        </div>
      <?php endif; ?>
    </div>
    <?php if ($s2_text): ?>
    <div class="col-2">
      <?php echo $s2_text; ?>
      <button class="button"><?php echo $s2_button ? $s2_button : null; ?></button>
      <div class="tab-box-round-bl greenapple"></div>
    </div>
    <?php endif; ?>

    <?php if ($s2_slideout): ?>
      <div class="slide-out wpop">
        <!-- about - hide/show -->
        <div class="overflow">
          <div class="col-1">
            <?php echo $s2_slideout['text'] ? $s2_slideout['text'] : null; ?>
          </div>
          <div class="col-2">
            <!-- h3 class="white">Heading</h3 -->
            <div class="photo-up">
              <img src="<?php echo $s2_slideout['text'] ? $s2_slideout['image']['url'] : null; ?>" alt="lindax2" />
            </div>
          </div>
          <div class="tab-box-round-bl-full greenapple"></div>
          <div class="close"></div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <?php if ($s3_quote || $s3_attribution): ?>
  <section id="sec__003">
    <div class="quote-box">
      <?php if ($s3_quote): ?>
        <div class="quote"><?php echo $s3_quote; ?></div>
      <?php endif; ?>
      <?php if ($s3_attribution): ?>
        <div class="attribution"><?php echo $s3_attribution; ?></div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>

  <section id="sec__003--1" class="has-slideout">
    <!-- handcrafted section-->
    <?php if ($s4_pattern): ?>
      <div class="pattern-2" style="background-image: url(<?php echo "'" . $s4_pattern["url"] . "'";?>)"></div>
    <?php endif; ?>
    <div class="col-1">
      <?php if ($s4_image): ?>
        <div class="photo-2">
          <img src="<?php echo $s4_image['url']; ?>" />
        </div>
      <?php endif; ?>
    </div>
    <?php if ($s4_text): ?>
    <div class="col-2">
      <?php echo $s4_text; ?>
      <button class="button"><?php echo $s4_button ? $s4_button : null; ?></button>
      <div class="tab-box-round-bl lorange"></div>
    </div>
    <?php endif; ?>

    <?php if ($s4_slideout): ?>
      <div class="slide-out wpop">
        <!-- about - hide/show -->
        <div class="overflow">
          <div class="col-1">
            <?php echo $s4_slideout['text'] ? $s4_slideout['text'] : null; ?>
          </div>
          <div class="col-2">
            <!-- h3 class="white">Heading</h3 -->
            <div class="photo-up">
              <img src="<?php echo $s4_slideout['text'] ? $s4_slideout['image']['url'] : null; ?>" alt="lindax2" />
            </div>
          </div>
          <div class="tab-box-round-bl-full lorange"></div>
          <div class="close"></div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <section id="sec__004">
    <!-- services-->
    <?php if ($s5_pattern): ?>
      <div class="pattern-1" style="background-image: url(<?php echo "'" . $s5_pattern["url"] . "'";?>)"></div>
    <?php endif; ?>
    <div class="col-1">
      <?php if($s5_headline): ?>
        <h3><?php echo $s5_headline; ?></h3>
      <?php endif; ?>

      <?php if ($s5_text): ?>
        <p><?php echo $s5_text; ?></p>
      <?php endif; ?>

      <?php if ($s5_list): ?>
        <ul>
          <?php foreach ($s5_list as $key => $item): ?>
            <li class="extra<?php echo $key < 1 ? ' active' : null; ?>"><?php echo $item['title']; ?></li>
          <?php endforeach; ?>
      
        </ul>
      <?php endif; ?>
    </div>

    <div class="col-2">
      <?php if ($s5_image): ?>
        <div class="photo-5">
          <img src="<?php echo $s5_image['url'] ?>" />
        </div>
      <?php endif; ?>

      <div class="service-box__wrapper greenapple">
        <?php foreach ($s5_list as $key => $item): ?>
          <div id="sv-<?php echo $key+1; ?>" class="service-box<?php echo $key < 1 ? ' active' : null; ?>">
            <h3><?php echo $item['title']; ?></h3>
            <p><?php echo $item['description']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php if ($s6_quote || $s6_attribution): ?>
  <section id="sec__005">
    <div class="quote-box">
      <?php if ($s6_quote): ?>
        <div class="quote"><?php echo $s6_quote; ?></div>
      <?php endif; ?>
      <?php if ($s6_attribution): ?>
        <div class="attribution"><?php echo $s6_attribution; ?></div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>

  <!--  PROJECT SECTION   -->

  <section id="sec__005--1" class="has-slideout">
    <?php if ($s7_headline): ?>
      <h1><?php echo $s7_headline; ?></h1>
    <?php endif; ?>

    <?php if ($s7_list): ?>
      <div class="slide-out-wrapper">
        <?php foreach($s7_list as $key => $item): ?>
          <div class="slide-out<?php echo $key < 1 ? ' active' : null; ?>">
            <div class="overflow">
              <div class="col-1<?php echo $key < 1 ? ' first' : ' not-first'; ?>">
                <?php if ($item['name']): ?>
                  <div class="clientname"><?php echo $item['name']; ?></div>
                <?php endif; ?>
                <?php if ($item['intro']): ?>
                  <div class="intro"><?php echo $item['intro']; ?></div>
                <?php endif; ?>

                <?php if ($item['services']): ?>
                  <h5>Services</h5>
                    <?php foreach($item['services'] as $service): ?>
                      <h6><?php echo $service['service']; ?></h6>
                    <?php endforeach; ?>
                  <h6>&nbsp;</h6>
                <?php endif; ?>

                <?php if ($item['images_1']): foreach($item['images_1'] as $image):?>
                  <div class="sample">
                    <?php echo wp_get_attachment_image( $image['image'], 'full', "", false ); ?>
                  </div>
                <?php endforeach; endif; ?>
              </div>

              <div class="col-2">
                <?php if ($item['quote']): ?>
                  <div class="quote in-project"><?php echo $item['quote']; ?></div>
                <?php endif; ?>
                <?php if ($item['attribution']): ?>
                  <div class="attribution in-project"><?php echo $item['attribution']; ?></div>
                <?php endif; ?>
                <?php if ($item['images_2']): foreach($item['images_2'] as $image): ?>
                  <div class="sample">
                    <?php echo wp_get_attachment_image( $image['image'], 'full', "", false ); ?>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>        
        <div class="arrows">
          <div class="arrow prev"></div>
          <div class="arrow next"></div>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <section id="sec__006">
    <?php if ($s8_pattern): ?>
      <div class="pattern-3" style="background-image: url(<?php echo "'" . $s8_pattern["url"] . "'";?>)"></div>
    <?php endif; ?>
    <div class="tab-box-round-tr">
      <?php if ($s8_headline): ?>
        <h3><?php echo $s8_headline; ?></h3>
      <?php endif; ?>

      <?php if ($s8_columns): ?>

      <?php if ($s8_columns['column_1']): ?>
        <div class="col-1">
          <ul>
            <?php foreach ($s8_columns['column_1'] as $item): ?>
              <li><?php echo $item['text']; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if ($s8_columns['column_2']): ?>
        <div class="col-2">
          <ul>
            <?php foreach ($s8_columns['column_2'] as $item): ?>
              <li><?php echo $item['text']; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      
      <?php endif; ?>
    </div>
  </section>
<?php
get_footer();