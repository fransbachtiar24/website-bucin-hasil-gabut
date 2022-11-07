@extends('layouts.master')

@section('title', 'Daily Book')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center card-title font-weight-bold">
                        Daily Book
                    </h3>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="{{ url('Daily/create') }}">
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                            id="create-btn" data-bs-target="#showModal"><i
                                                class="ri-add-line align-bottom me-1"></i>Tambah</button></a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <form action="{{ url('kategori') }}" method="GET">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="search" class="form-control search" name="search"
                                                placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary ms-1 btn-rounded">Search</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show"
                        role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>{{ session('success') }}</strong>
                    </div>
                @endif
                <div class="table-responsive table-card mt-3 mb-1">
                    <table class="table align-middle table-nowrap" id="customerTable">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th>Tanggal</th>
                                <th>Pap</th>
                                <th>Kegiatan Hari ini</th>
                                <th>Qoutes Hari ini</th>
                                <th>Kesan Hari Ini</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list form-check-all">
                            {{-- @php
                                $no = 1;
                            @endphp --}}
                            {{-- @foreach ($kategori as $item) --}}
                            <tr>
                                <td>1</td>
                                <td>13-september-2022</td>
                                <td>
                                    gambar
                                </td>
                                <td>
                                    scroll tiktok
                                </td>
                                <td>slebew</td>
                                <td>badmood</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div class="edit">
                                            <a href="{{ 'kategori/' }}">
                                                <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal"
                                                    data-bs-target="#showModal"><span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                            fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg></span> Edit</button></a>
                                        </div>

                                        <div class="remove">
                                            <form action="{{ url('kategori/') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                                                    data-bs-target="#deleteRecordModal" type="submit"><span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                            fill="currentColor" class="bi bi-x-square-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                                        </svg></span> Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                    {{-- <div class="result" style="display: none">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                            </lord-icon>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    {{ $kategori->links() }}
                </div> --}}
                </div>
            </div>
        </div>
    @endsection
