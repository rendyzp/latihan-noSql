@extends('layouts.app')

@section('content')
  <div class="container d-flex justify-content-center">
    <div class="card w-50">
      <div class="card-header">Create a new post</div>
      <div class="card-body">
        <form role="form" method="post" action="{{ url('siswa/create') }}">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="nama_siswa">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nisn</label>
              <input type="text" class="form-control" placeholder="Nisn" name="nisn">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No HP</label>
              <input type="text" class="form-control" placeholder="No HP" name="no_hp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <textarea class="form-control" name="alamat" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Slug</label>
              <textarea class="form-control" name="slug" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control">
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" id="category" class="form-control">
              <option value="a">Laravel</option>
              <option value="b">CSS</option>
              <option value="c">HTML</option>
            </select>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" class="form-control">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary float-right">Create</button>
        </form>
      </div>
    </div>
  </div>
@endsection
