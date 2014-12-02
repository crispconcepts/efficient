<div id="desktop_menu">
  <nav role="navigation">
    <ul class="menu cf">
      <?php foreach($pages->visible() as $p): ?>
      <li class="<? echo $p->slug(); e($p->isOpen(), ' active') ?>">
        <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

        <?php if($p->hasVisibleChildren()): $parent = $p; ?>
        <ul class="submenu">
          <? foreach($p->children()->visible() as $p): if($parent->slug() == 'products' && $p->slug() == 'fieldsafe'): else: ?>
          <li class="<? echo $p->slug(); e($p->isOpen(), ' active') ?>">
            <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
          <? endif; endforeach ?>
        </ul>
        <?php endif ?>

      </li>
      <?php endforeach ?>
    </ul>
  </nav>
</div>

<div id="mobile_menu">
  <button type="button" class="sb-toggle-left">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/menu-white.png" alt="Menu Icon">
  </button>
</div>
