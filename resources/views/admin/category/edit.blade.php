@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Изменение категории</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.category.update', $category->id) }}" method="post" class="col-4">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>Название</label>
                        <input type="text" class="form-control" name="title" value="{{ $category->title }}" placeholder="Введите название">
                        @error('title')
                            <div class="text-danger">
                                Это поле нужно заполнить
                            </div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Редактировать">
                </form>
            </div>

        </div>

    </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
