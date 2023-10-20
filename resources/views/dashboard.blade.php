@extends('admin')

@section('title-content','Dashboard') {{-- Ini buat isi yieldnya (tapi hanya berlaku buat yang isinya 1 baris) --}}

{{-- ini buat isi yield 'content' harus diakhiri @endsection klo byk baris --}}
@section('content')
<div class="row">
    @forelse ($projects as $project)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $project->nama }}</h3>
                </div>
                <div class="card-body">
                    @if ($project->image != null)
                        <img src="{{ asset('storage/' . $project->image) }}" width="200px" alt="gambarproject.{{ $project->id }}">
                    @else
                        <p>No Image</p>
                    @endif
                    <p class="text-justify">{{ $project->deskripsi }}</p>
                    <a href="{{ $project->link }}" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <p>Tidak ada proyek yang tersedia saat ini.</p>
            <p>Silahkan login dahulu.</p>
        </div>
    @endforelse
</div>
@endsection

@section('script')

@endsection