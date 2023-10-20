@extends('admin')

@section('title-content','Project') {{-- Ini buat isi yieldnya (tapi hanya berlaku buat yang isinya 1 baris) --}}

{{-- ini buat isi yield 'content' harus diakhiri @endsection klo byk baris --}}
@section('content')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}        
    </div>
@elseif(session()->has('failed'))
<div class="alert alert-danger">
    {{session('failed')}}        
</div>
@endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>  

            <div class="card-tools">
                <a href="{{route('project.create')}}" class="btn btn-tool">
                    <i class="fas fa-plus"></i>Add
                </a>
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Project</th>
                        <th>Link</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project) {{-- $projects diambil projectController kan dikirim pake ->with('projects'), as cmn penamaan/aliasing --}}
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->nama}}</td> {{--category ini ngambilnya dari yg ada di model project kan dh di relasi (function category)--}}
                            <td>{{$project->link}}</td>
                            <td>{{$project->deskripsi}}</td>
                            <td>
                                @if ($project->image != null)
                                <img src="{{asset('storage/'. $project->image)}}" width="200px" alt="gambarproject.{{$project->id}}">                              
                                @else
                                <p>no image</p>
                                @endif
                            </td>
                            <td style="width: 100px">
                                <form action="{{route('project.destroy',['id'=> $project->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <div class="btn-group">
                                    <a href="{{route('project.show',['id'=> $project->id])}}" class="btn btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('project.edit',['id'=> $project->id])}}" class="btn btn-warning">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin mau menghapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="card-footer"> --}}
            {{-- {{$projects->appends($_GET)->links()}} append$_Get buat ngambil param searchnya supaya pas pindah pagination gk berubah --}}
        {{-- </div> --}}
    </div>

@endsection

@section('script')

@endsection