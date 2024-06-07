@extends('layouts.master')

@section('title')
Quản lý Sản phẩm
@endsection

@section('content')
@if (isset($_SESSION['status']) && $_SESSION['status'])
<div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

@php
unset($_SESSION['status']);
unset($_SESSION['msg']);
@endphp
@endif

@if (isset($_SESSION['status']) && !$_SESSION['status'])
<div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>

@php
unset($_SESSION['status']);
unset($_SESSION['msg']);
@endphp
@endif

<a href="{{ url("admin/categories/create") }}" class="btn btn-primary">Thêm mới</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($categories as $category)
        <tr>
            <td>{{ $category['id'] }}</td>
            <td>{{ $category['name'] }}</td>
            <td>
                <a href="{{ url("admin/categories/{$category['id']}/edit") }}" class="btn btn-warning">Sửa</a>
                <a href="{{ url("admin/categories/{$category['id']}/delete") }}" onclick="return confirm('Chắc chắn xóa không?');" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection