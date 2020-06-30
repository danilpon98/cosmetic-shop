<?php $parent = isset($category['childs']); ?>
<li>
    <a href="category/<?=$category['aliascat'];?>"><?=$category['titlecat'];?></a>
    <?php if(isset($category['childs'])): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs']);?>
        </ul>
    <?php endif; ?>
</li>