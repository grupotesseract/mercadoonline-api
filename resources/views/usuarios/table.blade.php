@section('css')
    @include('vendor.datatables.css')
@endsection

{!! $dataTable->table([
    'width' => '100%',
    'class' => 'table table-hover'
]) !!}

@section('scripts')
    @include('vendor.datatables.js')
    {!! $dataTable->scripts() !!}
@endsection
