                <?php if (!empty($products)): ?>
                <?php foreach ($products as $product):?>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 product-card product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="product/<?= $product['alias'] ?>" class="mask"><img class="img-responsive zoom-img" src="images/upload/<?= $product['img'] ?>" alt="<?= $product['title'] ?>" /></a>
                        <div class="product-bottom">
                            <a href="product/<?= $product['alias'] ?>"><h3><?= $product['title'] ?></h3></a>
                            <a href="category/<?= $product['aliascat'] ?>" class="productcat"><p><?= $product['titlecat'] ?></p></a>
                            <h4><a data-id="<?= $product['id'] ?>" class="add-to-cart-link" href="cart/add?id=<?= $product['id']; ?>"><i></i></a> <span class="item_price">&#8381; <?= $product['price'] ?></span></h4>
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