@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد دسته بندی</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="#"> خانه</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> دسته بندی</a></li>
      <li class="breadcrumb-item active font-size-12" aria-current="page"> ایجاد دسته بندی</li>
    </ol>
  </nav>

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد دسته بندی
                </h4>
            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 pb-2 border-bottom">
                <a href="{{ route('admin.market.category.index') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>
            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام دسته</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">دسته والد</label>
                                <select name="" id="" class="form-control form-control-sm">
                                    <option value="">وسایل الکترونیکی</option>
                                    <option value="">وسایل برقی</option>
                                </select>
                            </div>
                        </section>
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>
        </section>
    </section>
</section>
@endsection
