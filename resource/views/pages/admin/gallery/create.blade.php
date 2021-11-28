@extends('layouts.admin')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
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
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="detail_vieos_id">Paket Travel</label>
                <select name="detail_videos_id" requred class="form-control">
                    <option value="">Pilih Detail Video</option>
                    @foreach ($detail_video as $detail_video)
                        <option value="{{$detail_video->id}}">
                            {{$detail_video->title}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="video">Upload Video</label>
                <input type="file" class="form-control" name="video" placeholder="Video">
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