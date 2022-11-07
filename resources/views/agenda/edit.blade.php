@extends('layouts.master')

@section('title', 'Edit Agenda')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">Edit Agenda <span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z" />
                        <path
                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" />
                    </svg></span></h3>
            <div class="col">
                <a href="{{ url('agenda') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ url('agenda/' . $modal->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="" class="form-label">Nama Agenda</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="agenda" placeholder="Masukkan Nama Kegiatan"
                            value="{{ $modal->agenda }}" required>
                        @error('agenda')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Tanggal</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal"
                            value="{{ $modal->tanggal }}" required>
                        @error('tanggal')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Tempat</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="tempat" value="{{ $modal->tempat }}"
                            placeholder="Masukkan Tempat Yang Ingin di Kunjungi" required>
                        @error('tempat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Waktu</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-select" name="waktu" aria-label="Default select example" required>
                            <option selected>{{ $modal->waktu }}</option>
                            <option value="pagi">Pagi</option>
                            <option value="siang">Siang</option>
                            <option value="malam">Malam</option>
                        </select>
                        <br>
                        @error('waktu')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success"><span><svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" height="14" fill="currentColor" class="bi bi-save-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z" />
                                </svg></span> Tambahkan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
