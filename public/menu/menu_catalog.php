<?php $parent = isset($category['childs']); ?>
<?php if(isset($category['childs'])): ?>
		<?php foreach ($category['childs'] as $category): ?>
			<li>
			    <a href="category/<?=$category['aliascat'];?>"><?=$category['titlecat'];?></a>
			    
			</li>
		<?php endforeach ?>
<?php endif; ?>
