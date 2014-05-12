<div<?php print $attributes; ?>>
  <div class="l-page-content">
      <header class="l-header" role="banner">
        <div class="l-branding">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
          <?php endif; ?>

          <?php print render($page['branding']); ?>
        </div>
        <div class='l-header-wrapp'>
          <?php print render($page['navigation']); ?>
          <?php print render($page['header']); ?>
        </div>
      </header>

      <div class="l-main clearfix">
        <div class="l-content" role="main">
          <?php print render($page['highlighted']); ?>
          <?php print $breadcrumb; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title && !$is_front): ?>
            <h1><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>

        </div>
      </div>
  </div>
<footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
</footer>
</div>
