    <!--banner-starts-->
    <div class="main-slider">
        <div class="slide">
            <div class="slide__img" style="background-image: url(images/slide-1.jpg);">
                <div class="slide__content slide__content_white slide__content_right container">
                    <h2>Модные новинки <span>в индустрии</span> красоты</h2>
                </div> 
            </div>
        </div>
        <div class="slide">
            <div class="slide__img" style="background-image: url(images/slide-2.jpg);">
                <div class="slide__content container slide__content_right">
                    <h2>Занимаемся <span>декоративной</span> <span>и уходовой</span> косметикой</h2>
                </div> 
            </div>
        </div>
        <div class="slide">
            <div class="slide__img" style="background-image: url(images/slide-3.jpg);">
                <div class="slide__content container">
                    <h2>Работаем с<span> официальными</span> дистрибьюторами</h2>
                </div>  
            </div>
        </div>
    </div>
    <!--banner-ends--> 

    <!--about-starts-->
    <div class="main-category">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="category">
                        <div class="category__img" style="background-image: url(images/cat-1.png);">
                            <a href="<?= PATH; ?>/category/lico"><h3 class="category__title">макияж <span>лица</span></h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="category">
                        <div class="category__img" style="background-image: url(images/cat-2.png);">
                            <a href="<?= PATH; ?>/category/glaza"><h3 class="category__title">макияж <span>глаз</span></h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="category">
                        <div class="category__img" style="background-image: url(images/cat-3.png);">
                            <a href="<?= PATH; ?>/category/guby"><h3 class="category__title">макияж <span>губ</span></h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="category">
                        <div class="category__img" style="background-image: url(images/cat-4.png);">
                            <a href="<?= PATH; ?>/category/brovi"><h3 class="category__title">макияж <span>бровей</span></h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about-end-->
    <!--product-starts-->
    <div class="product"> 
        <div class="container">
            <div class="sec-title">
                <h2>Хит продаж</h2>
            </div>
            <?php if($hits): ?>
            <div class="product-top">
                <div class="row row-flex product-one">
                    <?php foreach ($hits as $hit): ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 product-card product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="product/<?= $hit['alias']; ?>" class="mask"><img class="img-responsive zoom-img" src="images/upload/<?= $hit['img']; ?>" alt="<?= $hit['title']; ?>" /></a>
                            <div class="product-bottom">
                                <a href="product/<?= $hit['alias']; ?>"><h3><?= $hit['title']; ?></h3></a>
                                <a href="category/<?= $hit['aliascat']; ?>" class="productcat"><p><?= $hit['titlecat'] ?></p></a>
                                <h4><span class="item_price">&#8381; <?= $hit['price']; ?></span><a data-id="<?= $hit['id']; ?>" class="add-to-cart-link" href="cart/add?id=<?= $hit['id']; ?>">В корзину</a></h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>              
            </div>
            <?php endif; ?>
        </div>
    </div>