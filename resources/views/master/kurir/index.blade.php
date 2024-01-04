@extends('layouts.app')

@section('content')
<style>
    .btn-detail{
        border: solid 2px #0083FD;
        color:#0083FD;
        font-weight:600;
        border-radius: 2rem;
    }

    .btn-detail:hover{
        background-color: #0083FD;
        color:white;
        border-radius: 2rem;
    }
</style>
<div class="container-fluid">

<!-- Page Heading -->
<div class="page-heading">
    <h1 class="h3 mb-2 text-gray-800">Data Kurir</h1>
    <a href="{{route('kurir.create')}}" type="button" class="btn btn-custom">+ Add Kurir</a>
</div>
<br>    
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Vendor</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Kode Pos</th>
                        <th>Telefon</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($kurirs as $kurir)
                    <tr>
                        <td><a class="btn btn-detail" href="{{route('kurir.edit', $kurir->id)}}">Detail</a></td>
                        <td>{{ $kurir->name }}</td>
                        <td>{{ $kurir->vendor_id}}</td>
                        <td>{{ $kurir->address }}</td>
                        <td>{{ $kurir->village_id }}</td>
                        <td>{{ $kurir->subdistrict_id}}</td>
                        <td>{{ $kurir->city_id}}</td>
                        <td>{{ $kurir->province_id }}</td>
                        <td>{{ $kurir->zip_code }}</td>
                        <td>{{ $kurir->pic_contact_num }}</td>
                        <td>@if ($kurir->is_active == 1)
                                active
                            @else
                                inactive
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection
