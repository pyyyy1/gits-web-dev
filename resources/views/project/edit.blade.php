@extends('admin')

@section('title-content','project') {{-- Ini buat isi yieldnya (tapi hanya berlaku buat yang isinya 1 baris) --}}

{{-- ini buat isi yield 'content' harus diakhiri @endsection klo byk baris --}}
@section('content')
    <form action="{{route('project.update',['id'=> $project->id])}}" method="post" enctype="multipart/form-data"> {{-- enctype karena kita ngirim gambar yg di form image --}}
        @csrf {{-- di laravel klo mau input gitu harus pake @crsf buat keamanan pengiriman data --}}
        @method('put')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit project</h3>
            </div>
            
            <div class="card-body">
                {{-- untuk preview image --}}
                @if(!empty($project->image))
                    <img src="{{asset('storage/'.$project->image)}}" alt="project image" width="100px">
                @endif

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Project" value="{{$project->nama}}">
                            @error('nama')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Link</label>
                            <input name="link" type="text" class="form-control" placeholder="github.com/zhafia/gits-web-dev" value="{{$project->link}}">
                            @error('link')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control">
                            @error('image')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deksripsi produk">{{$project->deskripsi}}</textarea>
                </div>

            </div>

            <div class="card-footer">
                <a href="{{route('project.index')}}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary float-right">Edit project</button>
            </div>
        </div>
    </form>
@endsection