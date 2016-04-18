@extends('layouts.frontend')

@section('title')
    My profil page
@endsection

@section('styles')

@endsection

@section('content')
    <div class="starter-template">
        <h1>Welcome ...</h1>
    </div>
@endsection



@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
@endsection