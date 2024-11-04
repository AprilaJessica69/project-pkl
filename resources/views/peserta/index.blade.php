@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Peserta
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    No Hp
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
        @if(isset($pesertas) && count($pesertas) > 0)
        @foreach($pesertas as $key => $peserta)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $key + 1 }}</th>
                <td class="px-6 py-4">{{ $peserta->nama_peserta }}</td>
                <td class="px-6 py-4">{{ $peserta->alamat }}</td>
                <td class="px-6 py-4">{{ $peserta->no_telp }}</td>
                <td class="px-6 py-4">
                    <a href="" class="text-blue-600 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                    <a href="" class="text-red-600 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="5">Tidak ada Peserta yang ditampilkan</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection
