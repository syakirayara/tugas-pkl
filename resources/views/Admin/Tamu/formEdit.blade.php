@extends('app')
@section('content')

    <div class="d-flex justify-content-center width-80 ">
        <div class="card" style="width: 50rem;">
             <div class="card-header">
            Form Edit Buku Tamu
             </div>
        <div class="card-body">
            <form action="{{url('admin/update-data')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="{{$data->nama}}"> 

                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon" aria-describedby="telepon" value="{{$data->tlp}}"> 

                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control">{{$data->alamat}}</textarea>

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="email" value="{{$data->email}}"> 

                </div>

                <input type="hidden" value="{{$data->id}}" name="id">

                <button type="submit" class="btn btn-primary" value="update"> Simpan </button>
                </form>
                </div>
                </div>
                </div>
                @endsection