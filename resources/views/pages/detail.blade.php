@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
    <div class="page-content page-details">
        <!-- breadcrumb -->
        <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
        >
        <div class="container">
            <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </div>
            </div>
        </div>
        </section>

        <!-- gallery -->
        <section class="store-gallery" id="gallery">
        <div class="container">
            <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
                <transition name="slide-fade" mode="out-in">
                <!-- :src = variable di vue -->
                <img
                    :src="photos[activePhoto].url"
                    :key="photos[activePhoto].id"
                    class="w-100 main-image"
                    alt=""
                />
                </transition>
            </div>
            <div class="col-lg-2">
                <div class="row">
                <div
                    class="col-3 col-lg-12 mt-2 mt-lg-0"
                    v-for="(photo, index) in photos"
                    :key="photo.id"
                    data-aos="zoom-in"
                    data-aos-delay="100"
                >
                    <a href="#" @click="changeActive(index)">
                    <img
                        :src="photo.url"
                        class="w-100 thumbnail-image"
                        :class="{active : index == activePhoto}"
                        alt=""
                    />
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- details -->
        <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <h1>Sofa Ternyaman</h1>
                <div class="owner">By Galih Pratama</div>
                <div class="price">$1,409</div>
                </div>
                <div class="col-lg-2" data-aos="zoom-in">
                <a
                    href="{{ route('cart') }}"
                    class="btn btn-success btn-block text-white px-4 mb-2"
                    >Add to Cart</a
                >
                </div>
            </div>
            </div>
        </section>

        <section class="store-description">
            <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                <p>
                    The Nike Air Max 720 SE goes bigger than ever before with
                    Nike's tallest Air unit yet for unimaginable, all-day comfort.
                    There's super breathable fabrics on the upper, while colours
                    add a modern edge.
                </p>
                <p>
                    Bring the past into the future with the Nike Air Max 2090, a
                    bold look inspired by the DNA of the iconic Air Max 90.
                    Brand-new Nike Air cushioning underfoot adds unparalleled
                    comfort while transparent mesh and vibrantly coloured details
                    on the upper are blended with timeless OG features for an
                    edgy, modernised look.
                </p>
                </div>
            </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="store-review">
            <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mt-3 mb-3">
                <h4>Customer Review (3)</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                    <li class="media">
                    <img
                        src="/images/testimoni/icons-testinomial-1.png"
                        class="rounded-circle mr-3"
                        alt=""
                    />
                    <div class="media-body">
                        <h5 class="mt-2 mb-1">Hazza Risky</h5>
                        <p>
                        I thought it was not good for living room. I really
                        happy to decided buy this product last week now feels
                        like homey.
                        </p>
                    </div>
                    </li>
                    <li class="media">
                    <img
                        src="/images/testimoni/icons-testinomial-2.png"
                        class="rounded-circle mr-3"
                        alt=""
                    />
                    <div class="media-body">
                        <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                        <p>
                        Color is great with the minimalist concept. Even I
                        thought it was made by Cactus industry. I do really
                        satisfied with this.
                        </p>
                    </div>
                    </li>
                    <li class="media">
                    <img
                        src="/images/testimoni/icons-testinomial-3.png"
                        class="rounded-circle mr-3"
                        alt=""
                    />
                    <div class="media-body">
                        <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                        <p>
                        When I saw at first, it was really awesome to have with.
                        Just let me know if there is another upcoming product
                        like this.
                        </p>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </section>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
    var gallery = new Vue({
        el: "#gallery",
        mounted() {
        AOS.init();
        },
        data: {
        activePhoto: 0,
        photos: [
            {
            id: 1,
            url: "/images/product details/product-details-1.jpg",
            },
            {
            id: 2,
            url: "/images/product details/product-details-2.jpg",
            },
            {
            id: 3,
            url: "/images/product details/product-details-3.jpg",
            },
            {
            id: 4,
            url: "/images/product details/product-details-4.jpg",
            },
        ],
        },
        methods: {
        changeActive(id) {
            this.activePhoto = id;
        },
        },
    });
    </script>
@endpush