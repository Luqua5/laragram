@if ($message = Session::get('error'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p>{{$message}}</p>
</div>
@endif 