@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product
@endsection

@section('content')
    <section
        class="section-content section-dashboard-home"
        data-aos="fade-up"
        >
        <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">My Products</h2>
            <p class="dashboard-subtitle">Manage it well and get money</p>
        </div>
        <!-- Dashboard content -->
        <div class="dashboard-content">
            <div class="row">
            <div class="col-12">
                <a
                href="/dashboard/products/create"
                class="btn btn-success"
                >
                Add New Product
                </a>
            </div>
            </div>
            <div class="row mt-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                href="/dashboard/products/1"
                class="card card-dashboard-product d-block"
                >
                <div class="card-body">
                    <img
                    src="/images/dashboard/product-card-1.png"
                    alt="products"
                    class="w-100 mb-2"
                    />
                    <div class="product-title">Shirup Marzzan</div>
                    <div class="product-category">Foods</div>
                </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                href="/dashboard/products/1"
                class="card card-dashboard-product d-block"
                >
                <div class="card-body">
                    <img
                    src="/images/dashboard/product-card-2.png"
                    alt="products"
                    class="w-100 mb-2"
                    />
                    <div class="product-title">Shirup Marzzan</div>
                    <div class="product-category">Foods</div>
                </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                href="/dashboard/products/1"
                class="card card-dashboard-product d-block"
                >
                <div class="card-body">
                    <img
                    src="/images/dashboard/product-card-3.png"
                    alt="products"
                    class="w-100 mb-2"
                    />
                    <div class="product-title">Shirup Marzzan</div>
                    <div class="product-category">Foods</div>
                </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                href="/dashboard/products/1"
                class="card card-dashboard-product d-block"
                >
                <div class="card-body">
                    <img
                    src="/images/dashboard/product-card-4.png"
                    alt="products"
                    class="w-100 mb-2"
                    />
                    <div class="product-title">Shirup Marzzan</div>
                    <div class="product-category">Foods</div>
                </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                href="/dashboard/products/1"
                class="card card-dashboard-product d-block"
                >
                <div class="card-body">
                    <img
                    src="/images/dashboard/product-card-5.png"
                    alt="products"
                    class="w-100 mb-2"
                    />
                    <div class="product-title">Shirup Marzzan</div>
                    <div class="product-category">Foods</div>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection