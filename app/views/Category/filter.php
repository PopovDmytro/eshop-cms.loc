<?php if(!empty($products)):?>
    <?php $curr = eshop\App::$app->getProperty('currency');?>
    <?php foreach ($products as $product):?>
        <div class="col-md-4 product-left p-left">
            <div class="product-main simpleCart_shelfItem">
                <a href="product/<?=$product->alias;?>" class="mask">
                    <img class="img-responsive zoom-img" src="images/<?=$product->img;?>" alt="" />
                </a>
                <div class="product-bottom">
                    <h3><?=$product->title;?></h3>
                    <p>Explore Now</p>
                    <h4>
                        <a class="add-to-cart-link" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>"><i></i></a>
                        <span class=" item_price"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                        <?php if($product->old_price):?>
                            <small class=" item_price"><del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                        <?php endif;?>
                    </h4>
                </div>
                <div class="srch srch1">
                    <span>-50%</span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
    <div class="text-center">
        <p>(<?=count($products)?>: items of :<?=$total?>)</p>
        <?php if($pagination->countPages > 1): ?>
            <?=$pagination; ?>
        <?php endif; ?>
    </div>
<?php else:?>
    <h3>Did not find products...</h3>
<?php endif;?>
