@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA PELANGGAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-outline-success" href="{{ url('pelanggan/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>NOMOR HP</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->pel_id}}</td>
                <td>{{ $row->pel_no}}</td>
                <td>{{ $row->pel_nama}}</td>
                <td>{{ $row->pel_alamat}}</td>
                <td>{{ $row->pel_hp}}</td>
                <td><a class="btn btn-outline-danger" href="{{url('pelanggan/' .$row->pel_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pelanggan/' .$row->pel_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-warning" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection