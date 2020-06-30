<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?=PATH;?>">Главная</a></li>
                <li>Поиск по запросу "<?=h($query);?>"</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--prdt-starts-->
<div class="prdt"> 
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12 product-cont prdt-left">
                
                <div class="row row-flex product-one">
                    <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product):?>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 product-card product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="product/<?= $product['alias'] ?>" class="mask"><img class="img-responsive zoom-img" src="images/upload/<?= $product['img'] ?>" alt="<?= $product['title'] ?>" /></a>
                            <div class="product-bottom">
                                <a href="product/<?= $product['alias'] ?>"><h3><?= $product['title'] ?></h3></a>
                                <a href="category/<?= $product['aliascat'] ?>" class="productcat"><p><?= $product['titlecat'] ?></p></a>
                                <h4><span class="item_price">&#8381; <?= $product['price'] ?></span><a data-id="<?= $product['id'] ?>" class="add-to-cart-link" href="cart/add?id=<?= $product['id']; ?>">В корзину</a></h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <div class="clearfix"></div>
                    <div class="product-pagination text-center">
                        <?php if ($pagination->countPages > 1):?>
                        <?= $pagination; ?>
                        <?php endif; ?>
                    </div>
                    <?php else: ?>
                    <h4>Поиск не дал результатов</h4>
                    <?php endif ?>
                </div>
            </div> 
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--product-end-->