@extends('master.admin')
@section('title','Sửa Danh Mục')
@section('content')
<h2 style="text-align: center ;">
    <font color="RED">CHỈNH SỬA DANH MỤC</font>
</h2>
<br><br>
<form action="{{route('category.update',$category->id)}}" method="POST" role="form">
    <legend>Sửa Danh Mục</legend>
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên Danh Mục</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}" id="" placeholder="name ">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}}>
            Ẩn
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}}>
            Hiển thị
        </label>
    </div>
    <button type="submit" class="btn btn-success">Sửa </button>
</form>
@stop()