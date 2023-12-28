@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
    <div class="page-content page-home">
        <!-- Categories -->
        <section class="store-trend-categories">
        <div class="container">
            <div class="row">
            <div class="col-12" data-aos="fade-up">
                <h5>All Categories</h5>
            </div>
            </div>
            <div class="row">
            <div
                class="col-6 col-md-3 col-lg-2"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                <a href="#" class="component-categories d-block">
                <div class="categories-image">
                    <img
                    src="/images/categories/categories-gadgets.svg"
                    alt="Categories Gadgets"
                    class="w-100"
                    />
                </div>
                <p class="categories-text">Gadgets</p>
                </a>
            </div>
            <div
                class="col-6 col-md-3 col-lg-2"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <a href="#" class="component-categories d-block">
                <div class="categories-image">
                    <img
                    src="/images/categories/categories-furniture.svg"
                    alt="Categories Furniture"
                    class="w-100"
                    />
                </div>
                <p class="categories-text">Furniture</p>
                </a>
            </div>
            <div
                class="col-6 col-md-3 col-lg-2"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a href="#" class="component-categories d-block">
                <div class="categories-image">
                    <img
                    src="/images/categories/categories-makeup.svg"
                    alt="Categories Make Up"
                    class="w-100"
                    />
                </div>
                <p class="categories-text">Make Up</p>
                </a>
            </div>
            <div
                class="col-6 col-md-3 col-lg-2"
                data-aos="fade-up"
                data-aos-delay="400"
            >
                <a href="#" class="component-categories d-block">
                <div class="categories-image">
                    <img
                    src="/images/categories/categories-sneaker.svg"
                    alt="Categories Sneaker"
                    class="w-100"
                    />
                </div>
                <p class="categories-text">Sneaker</p>
                </a>
            </div>
            <div
                class="col-6 col-md-3 col-lg-2"
                data-aos="fade-up"
                data-aos-delay="500"
            >
                <a href="#" class="component-categories d-block">
                <div class="categories-image">
                    <img
                    src="/images/categories/categories-tools.svg"
                    alt="Categories Tools"
                    class="w-100"
                    />
                </div>
                <p class="categories-text">Tools</p>
                </a>
            </div>
            <div
                class="col-6 col-md-3 col-lg-2"
                data-aos="fade-up"
                data-aos-delay="600"
            >
                <a href="#" class="component-categories d-block">
                <div class="categories-image">
                    <img
                    src="/images/categories/categories-baby.svg"
                    alt="Categories Baby"
                    class="w-100"
                    />
                </div>
                <p class="categories-text">Baby</p>
                </a>
            </div>
            </div>
        </div>
        </section>

        <!-- Products -->
        <section class="store-new-products">
        <div class="container">
            <div class="row">
            <div class="col-12" data-aos="fade-up">
                <h5>All Products</h5>
            </div>
            </div>
            <div class="row">
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-apple-watch.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Apple Watch 4</p>
                </div>
                <div class="products-price">
                    <p>$890</p>
                </div>
                </a>
            </div>
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-orange-bogotta.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Orange Bogotta</p>
                </div>
                <div class="products-price">
                    <p>$94,509</p>
                </div>
                </a>
            </div>
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-sofa-ternyaman.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Sofa Ternyaman</p>
                </div>
                <div class="products-price">
                    <p>$1,409</p>
                </div>
                </a>
            </div>
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="400"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-bubuk-maketti.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Bubuk Maketti</p>
                </div>
                <div class="products-price">
                    <p>$225</p>
                </div>
                </a>
            </div>
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="500"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-tatakan-gelas.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Tatakan Gelas</p>
                </div>
                <div class="products-price">
                    <p>$45,184</p>
                </div>
                </a>
            </div>
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="600"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-mavic-kawe.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Mavic Kawe</p>
                </div>
                <div class="products-price">
                    <p>$503</p>
                </div>
                </a>
            </div>
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="700"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-black-edition-nike.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Black Edition Nike</p>
                </div>
                <div class="products-price">
                    <p>$70,482</p>
                </div>
                </a>
            </div>
            <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="800"
            >
                <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                        background-image: url(/images/products/products-monkey-toys.png);
                    "
                    ></div>
                </div>
                <div class="products-text">
                    <p>Monkey Toys</p>
                </div>
                <div class="products-price">
                    <p>$783</p>
                </div>
                </a>
            </div>
            </div>
        </div>
        </section>
    </div>
@endsection