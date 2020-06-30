<!--start-breadcrumbs-->
		<div class="breadcrumbs">
			<div class="container">
				<div class="breadcrumbs-main">
					<ol class="breadcrumb">
						<?= $breadcrumbs; ?>
					</ol>
				</div>
			</div>
		</div>
		<!--end-breadcrumbs-->
		<!--start-single-->
		<div class="single contact">
			<div class="container">
				<div class="single-main">
					<div class="sngl-top clearfix">
						<div class="col-sm-5">	
							<div class="flexslider">
								<ul class="slides">
									<li>
										<img src="images/upload/<?= $product->img; ?>" data-imagezoom="true" class="img-responsive" alt=""/>
									</li>
								</ul>
							</div>
						</div>	
						<div class="col-sm-7">
							<div class="single-para simpleCart_shelfItem">
								<h2><?= $product->title; ?></h2>
								<h5 class="item_price">&#8381; <?= $product->price; ?></h5>
								<div class="tap">
									<div class="tab-content">
										<div class="tab-content_item visible">
											<?= $product->content; ?>
										</div>
									</div>
								</div>
								<ul class="tag-men">
									<li><span>Категория:</span>
									<a href="category/<?= $category->aliascat; ?>"><span class="women1"><?= $category->titlecat; ?></span></a></li>
								</ul>
								
								<div class="quantity">
									<a href="cart/add?id=<?= $product->id; ?>" id="productAdd" data-id="<?= $product->id; ?>" class="add-cart item_add add-to-cart-link">Добавить в корзину</a>
                  					<input class="form-control" type="number" size="4" value="1" name="quantity" min="1" step="1" readonly>
                				</div>
                
								

							</div>
						</div>
					</div>
					
					
					<?php if ($related):?>
					<div class="latestproducts">
						<h3>С этим товаром также покупают:</h3>
						<div class="row row-flex product-one">
							<?php foreach ($related as $relitem): ?>
							<div class="col-xs-6 col-sm-6 col-md-3 product-card product-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="product/<?= $relitem['alias'] ?>" class="mask"><img class="img-responsive zoom-img" src="images/upload/<?= $relitem['img'] ?>" alt="" /></a>
									<div class="product-bottom">
										<a href="product/<?= $relitem['alias'] ?>"><h3><?= $relitem['title'] ?></h3></a>
										<a href="category/<?= $relitem['aliascat'] ?>" class="productcat"><p><?= $relitem['titlecat'] ?></p></a>
										<h4><span class="item_price">&#8381; <?= $relitem['price'] ?></span><a data-id="<?= $relitem['related_id'] ?>" class="item_add add-to-cart-link" href="cart/add?id=<?= $relitem['related_id'] ?>">В корзину</a></h4>
									</div>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
					<?php endif; ?>

					<?php if ($recentlyViewed):?>
					<div class="latestproducts">
						<h3>Недавно просмотренные товары:</h3>
						<div class="row row-flex product-one">
							<?php foreach ($recentlyViewed as $recViewed): ?>
							<div class="col-xs-6 col-sm-6 col-md-3 product-card product-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="product/<?= $recViewed['alias'] ?>" class="mask"><img class="img-responsive zoom-img" src="images/upload/<?= $recViewed['img'] ?>" alt="" /></a>
									<div class="product-bottom">
										<a href="product/<?= $recViewed['alias'] ?>"><h3><?= $recViewed['title'] ?></h3></a>
										<a href="category/<?= $recViewed['aliascat'] ?>" class="productcat"><p><?= $recViewed['titlecat'] ?></p></a>
										<h4><span class="item_price">&#8381; <?= $recViewed['price'] ?></span><a data-id="<?= $recViewed['id'] ?>" class="item_add add-to-cart-link" href="cart/add?id=<?= $recViewed['id'] ?>">В корзину</a></h4>
									</div>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!--end-single-->