@extends('adminlte.master')

@section('content')

    <div class="m-3">
        <h1>Tabel Pertanyaan</h1>
        <a href="/pertanyaan/create" class="btn btn-primary m-2">
            Create New Question
        </a>
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Isi Pertanyaan</th>
                      <th>Detail Jawaban</th>
                      <th>Form Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $pertanyaan)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td> {{ $pertanyaan->judul }} </td>
                            <td> {{ $pertanyaan->isi }} </td>
                            <td>
                                <a href=" {{ url('/jawaban/'.$pertanyaan->id) }} ">
                                  <button class="btn btn-success">Lihat Jawaban</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('/jawaban/'.$pertanyaan->id) }}" method="post">
                                  @csrf
                                  <input type="text" name="isi">
                                  <input hidden name="pertanyaan_id" value="{{ $pertanyaan->id }}">
                                  <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
                                  <input hidden name="tanggal_diperbarui" value="{{ Carbon\Carbon::now() }}">
                                  <button type="submit" class="btn btn-success">Submit Jawaban</button>
                                </form>    
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
    </div>

@endsection