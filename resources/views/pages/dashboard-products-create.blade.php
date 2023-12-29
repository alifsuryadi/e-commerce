@extends('layouts.dashboard') 

@section('title') 
    Store Dashboard Product Create
@endsection 

@section('content')
<section class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Create Product</h2>
            <p class="dashboard-subtitle">Create your own product</p>
        </div>
        <!-- Dashboard content -->
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Product Name</label>
                                            <input
                                                type="text"
                                                id=""
                                                name=""
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input
                                                type="number"
                                                id=""
                                                name=""
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="category"
                                                >Kategori</label
                                            >
                                            <select
                                                name="category"
                                                id="category"
                                                class="form-control"
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                >
                                                    Select Category
                                                </option>
                                                <option value="">
                                                    Furniture
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea
                                                name="description"
                                                id="editor"
                                                cols="30"
                                                rows="10"
                                                class="form-control"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Thumbnails</label>
                                            <input
                                                type="file"
                                                id=""
                                                name=""
                                                class="form-control"
                                                multiple
                                            />
                                            <p class="text-muted">
                                                Kamu dapat memilih lebih dari
                                                satu
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button
                                            type="submit"
                                            class="btn btn-success px-5 btn-block"
                                        >
                                            Create Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 


@push('addon-script')
<script src="https://cdn.ckeditor.com/4.20.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace("editor");
</script>
@endpush
