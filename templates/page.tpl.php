<aside class="right-off-canvas-menu">
        <?php //print ($alt_main_menu); ?>
        <?php print render($page['offcanvas_meny']); ?>
        <?php print render($page['lang']); ?>
 </aside>

    <a class="exit-off-canvas"></a>
<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <aside role="complementary" class="search-block">
    <div class="row">
    <div class="columns small-centered small-12 large-offset-9">
    <?php print render($page['top_search']); ?>
    </div>
  </div>
  </aside>
  <header role="banner" class="l-header">

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
      <section class="<?php print $alt_header_classes; ?>">
        <div class="row hide-for-large-up">
          
          <div class="columns small-10 logo">
            <?php if ($linked_logo): print $linked_logo; endif; ?>
          </div>
          
          <nav class="small-2 columns tab-bar">
            <a class="right-off-canvas-toggle menu-icon" href="#" ><span></span></a>
          </nav>
        </div>
         
         <div class="row show-for-large-up ">
            <div class="columns medium-4 ">
              <?php if ($linked_logo): print $linked_logo; endif; ?>
            </div>
            <div class="columns medium-8 ">
            <?php if (!empty($page['top_meny'])): ?>
              <div class="top-meny">
                <?php print render($page['top_meny']); ?>
            </div> 
          <?php endif; ?>
            
            <?php if ($alt_main_menu): ?>
              <nav id="main-menu" class="navigation" role="navigation">
                <?php print ($alt_main_menu); ?>
            </nav> 
          <?php endif; ?>
          </div>
         </div>
        

        <?php if ($alt_secondary_menu): ?>
          <nav id="secondary-menu" class="navigation" role="navigation">
            <?php print $alt_secondary_menu; ?>
          </nav> <!-- /#secondary-menu -->
        <?php endif; ?>

      </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>
  </header>
  <!--/.l-header -->
  <div class="inner-page row small-collapse">
  	<!-- row large-collapse -->
  <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured row small-collapse">
      <div class="columns medium-12 ">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <!--.main -->
  <main role="main" class="row l-main">
  	<?php if (!empty($page['content_above'])): ?>
      <!-- content above -->
	  	<div class="small-12 columns content-above">
	  		<?php print render($page['content_above']); ?>
	  	</div>
      <!-- end content above -->
  	<?php endif; ?>
    
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <!-- hightlighted -->
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
        <!-- highlighted end -->
      <?php endif; ?>

      <!-- <a id="main-content"></a> -->

      <div class="hide-for-small-only"><?php //if ($breadcrumb): print $breadcrumb; endif; ?></div>


      <?php if ($title): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    

    <?php if (!empty($page['sidebar_first'])): ?>
      <!-- sidbar first -->
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
      <!-- sidebar first end -->
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <!-- sidebar right -->
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
      <!-- sidebar right end -->
    <?php endif; ?>
  </main>
  <!--/.l-main end -->

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first medium-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle medium-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last medium-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first medium-6 medium-centered  small-12 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second medium-4 medium-centeredsmall-12 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third medium-4 small-12 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer -->
  <footer class="l-footer row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) : ?>
      <div class="copyright columns">
        &copy; <?php print date('Y') . ' ' . $site_name; ?>
      </div>
    <?php endif; ?>
  </footer>
  <!--/.l-footer -->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
</div>
<!--/.page -->
