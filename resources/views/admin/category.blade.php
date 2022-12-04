@extends('admin.layouts.app')

@section('title')
Kategori
@endsection

@push('addons-css')
@livewireStyles
@endpush

@section('content')
<!-- Main Content -->
@livewire('category.table-category')

{{-- Modal --}}
{{-- @include('admin.components.modal.add-category-modal') --}}

@endsection

@push('addons-js')
  @livewireScripts
  <script src="{{ asset("../assets/js/page/category/category.js") }}"></script>
@endpush