@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Action</th>
              <th>Nama</th>
              <th>NISN</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Created At</th>
              <th>Updated At</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($data as $dt)
              <tr>
                <td>
                  <a href="{{ url('siswa/' . $dt->slug) }}">Edit</a>
                  <form method="post" action="{{ url('siswa/' . $dt->slug) }}">
                    @csrf
                    {{ method_field('delete') }}
                    <button type="submit">Hapus</button>
                  </form>
                </td>
                <td>{{ $dt->nama }}</td>
                <td>{{ $dt->nisn }}</td>
                <td>{{ $dt->no_hp }}</td>
                <td>{{ $dt->email }}</td>
                <td>{{ $dt->alamat }}</td>
                <td>{{ $dt->created_at }}</td>
                <td>{{ $dt->updated_at }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="4">No Data Found</td>
              </tr>
            @endforelse
          </tbody>
        </table>

        {{-- {{ $users->links() }} --}}
      </div>
    </div>
  </div>
@endsection
