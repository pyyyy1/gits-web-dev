@extends('admin')

@section('title-content','project') {{-- Ini buat isi yieldnya (tapi hanya berlaku buat yang isinya 1 baris) --}}

{{-- ini buat isi yield 'content' harus diakhiri @endsection klo byk baris --}}
@section('content')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Project</h3>
            </div>
            <div class="card-body">
                @if(!empty($project->image))
                    <img src="{{asset('storage/'.$project->image)}}" alt="project image" width="100px">
                @endif

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" value="{{$project->nama}}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col">
                            <div class="form-group">
                                <label>Link</label>
                                <input name="name" type="text" value="{{$project->link}}" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <div class="form-group">
                                <label>Description</label>
                                <input name="name" type="text" value="{{$project->deskripsi}}" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="{{route('project.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
@endsection