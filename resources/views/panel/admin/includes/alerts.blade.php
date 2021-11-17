@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-warning alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span>{{$error}}</span>
</div>
@endforeach
@endif

@if (session('success'))
<div class="alert alert-success alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span>{{session('success')}}</span>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span>{{session('error')}}</span>
</div>
@endif