@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DAFTAR GOLONGAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-outline-success" href="{{ url('golongan/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->gol_id}}</td>
                <td>{{ $row->gol_kode}}</td>
                <td>{{ $row->gol_nama}}</td>
                <td><a class="btn btn-outline-danger" href="{{url('golongan/' .$row->gol_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('golongan/' .$row->gol_id)}}" method="post">
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