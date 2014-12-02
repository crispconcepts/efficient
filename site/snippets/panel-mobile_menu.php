<div class="sb-slidebar sb-left sb-style-overlay">
  <nav>
    <ul>
      <?php foreach($pages->visible() as $p): ?>
      <li class="<? echo $p->slug(); e($p->isOpen(), ' active') ?>">
        <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

        <?php if($p->hasVisibleChildren()): ?>
        <ul class="submenu">
          <?php foreach($p->children()->visible() as $p): ?>
          <li class="<? echo $p->slug(); e($p->isOpen(), ' active') ?>">
            <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>

      </li>
      <?php endforeach ?>
    </ul>
  </nav>
</div>