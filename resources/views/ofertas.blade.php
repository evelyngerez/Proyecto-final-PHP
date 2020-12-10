@extends('layouts.principal')

    <section id="product" class="product-area pt-100 pb-130" style="margin-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">¡Nuestras ofertas!</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="active" id="v-pills-furniture-tab" data-toggle="pill" href="#v-pills-furniture" role="tab" aria-controls="v-pills-furniture" aria-selected="true">Medialunas</a>
                            <a id="v-pills-lighting-tab" data-toggle="pill" href="#v-pills-lighting" role="tab" aria-controls="v-pills-lighting" aria-selected="false">Alfajores</a>

                            <a id="v-pills-outdoor-tab" data-toggle="pill" href="#v-pills-outdoor" role="tab" aria-controls="v-pills-outdoor" aria-selected="false">Pastafrolas</a>

                        </div>
                        <!-- nav -->
                    </div>
                    <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="/images/manteca.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-17%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Manteca<br> x12 Unidades</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$140</span>
                                                <span class="discount-price">$160</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="/images/grasa.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-17%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Grasa <br> x12 Unidades</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$140</span>
                                                <span class="discount-price">$160</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="/images/jyq.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-17%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Jamón y queso<br> x12 Unidades</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$200</span>
                                                <span class="discount-price">$250</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="images/pastelera.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Crema pastelera<br>x12 Unidades</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$150</span>
                                                <span class="discount-price">$180</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                        <!--Marmol Triturado-->
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                            <!-- product items -->
                        </div>
                        <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-lighting" role="tabpanel" aria-labelledby="v-pills-lighting-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="images/alfajorm.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Maicena<br>x12 Unidades</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$150</span>
                                                <span class="discount-price">$180</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="images/choco.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Chocolate<br>x6 Unidades</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$150</span>
                                                <span class="discount-price">$200</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="images/color.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Coloridos<br>x12 Unidades</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$150</span>
                                                <span class="discount-price">$200</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                            <!-- product items -->
                        </div>
                        <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-outdoor" role="tabpanel" aria-labelledby="v-pills-outdoor-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="images/ricota.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Ricota<br>16 cm diámetro</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$120</span>
                                                <span class="discount-price">$150</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="images/pastafrola.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Pastafrolas <br>16 cm diámetro</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$80</span>
                                                <span class="discount-price">$100</span>
                                            </div>
                                        </div>
                                        <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                            <!-- product items -->
                        </div>
                        <!-- tab pane -->

                    </div>
                    <!-- tab content -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
</body>
</html>