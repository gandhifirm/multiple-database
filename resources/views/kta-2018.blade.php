@extends('includes.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nama Perusahaan</th>
                <th scope="col" class="text-center">Alamat</th>
                <th scope="col" class="text-center">Priode Aktif</th>
                <th scope="col" class="text-center">Priode Akhir</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                    <td>{{ $item->company_name }}</td>
                    <td>{{ $item->company_address }}</td>
                    <td class="text-center">{{ $item->periode_start }}</td>
                    <td class="text-center">{{ $item->periode_end }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
