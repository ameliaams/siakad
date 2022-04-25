@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
                <h3>KARTU HASIL STUDI (KHS)</h3>
            </div>
        </div>
        <div class="text-left">
            <p><b>Nama : </b>{{ $Mahasiswa->nama }}</p>
            <p><b>Nama : </b>{{ $Mahasiswa->nim }}</p>
            <p><b>Nama : </b>{{ $Mahasiswa->kelas->nama_kelas }}</p>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($Mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs ->nama_matkul }}</td>
                    <td>{{ $mhs ->sks }}</td>
                    <td>{{ $mhs ->semester }}</td>
                    <td>{{ $mhs ->pivot->nilai }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection