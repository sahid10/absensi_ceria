@extends('template')
@section('content')
<div class="container">

    <!-- Tambahkan DataTables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/2.1.7/css/dataTables.semanticui.css">
    
    <div class="container-fluid py-4">
        <h2>Daftar Inventory</h2>
    <a href="{{ route('inventory.create') }}">
        <button type="submit" class="btn btn-primary">Tambah Inventory</button>
    </a>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Inventory table</h6>
                </div>
                <table id="absensiTable" class="table table-striped">
                    <thead>
                        
       
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">No</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Name</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Quantity</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Price</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Category</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $index => $item)
                        <tr>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $item->name }}</td>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $item->quantity }}</td>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $item->category }}</td>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $item->price }}</td>
                            <td>
                                {{-- <a href="{{ route('inventory.show', $item->id) }}">Show</a>
                                <a href="{{ route('inventory.edit', $item->id) }}">Edit</a>
                                <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
@endsection
