<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li <?php e($p->isOpen(), ' class="active"') ?>>
      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li <?php e($p->isOpen(), ' class="active"') ?>>
          <a href="<?php echo $p->url() ?>"><span class="triangle"></span><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>
