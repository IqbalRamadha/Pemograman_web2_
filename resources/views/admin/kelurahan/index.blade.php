<x-layout>
    <x-slot name="page_name">Halaman kelurahan</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id </th>
                <th>Nama Kelurahan </th>
                <th>Nama Kecamatan </th>
            </tr>
            @foreach ($list_kelurahan as $kelurahan)
                <tr>
                    <td>{{ $kelurahan->id}}</td>
                    <td>{{ $kelurahan->nama}}</td>
                    <td>{{ $kelurahan->kecamatan_nama}}</td>
                </tr>  
            @endforeach  
        </table>  
    </x-slot> 
</x-layout>