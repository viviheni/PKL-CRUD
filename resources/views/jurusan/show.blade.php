@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Jurusan </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Kode Mata Pelajaran</label>
                            <input type="text" name="title" value="{{ $jurusan->nis }}" class="form-control" readonly value="{{ $jurusan->kode_mata_pelajaran}}">
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Mata Pelajaran</label>
                            <input type="text" name="content" class="form-control" readonly value="{{ $jurusan->nama_mata_pelajaran}}">
                                </input>
                        </div>
                        <div class="mb-3">
                            <label for="">Semester</label>
                            <input type="text" name="content" class="form-control" readonly value="{{ $jurusan->semester }}">
                                </input>
                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <input type="date" name="content" class="form-control" readonly value="{{ $jurusan->jurusan }}">
                                </input>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jurusan.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection