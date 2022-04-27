@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')

@section('content')

<form action="{{route('process')}}" method="POST" id="notice">
    @csrf
                <input type="hidden" name="amount" value="{{$amount}}" >
            <input type="text"  value="Redirection vers cmi ...">

</form>
    

@endsection
@push('scripts')

@endpush