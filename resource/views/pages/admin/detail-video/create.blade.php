@extends('layouts.admin')

@section('content')
    
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Detail Video</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{route('detail-video.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="categories_id">Kategori</label>
                        <select name="categories_id" requred class="form-control">
                            <option value="">Pilih Kategori Video</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->category}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Judul" 
                        value="{{old('title')}}">
                    </div>

                    <div class="form-group">
                        <label for="about">Tentang</label>
                        <textarea name="about" id="" rows="10" class="d-block w-100 form-control">{{old('about')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="images">Upload Thumbnail</label>
                        <input type="file" name="images" class="form-control" placeholder="images" 
                        value="{{old('images')}}">
                    </div>
                    

                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

@endsection