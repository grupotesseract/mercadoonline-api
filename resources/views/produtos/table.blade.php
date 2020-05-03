@section('css')
    @include('vendor.datatables.css')
@endsection

{!! $dataTable->table([
    'width' => '100%',
    'class' => 'table table-hover table-striped table-bordered',
    'id' => 'produtosdt'
]) !!}

@section('scripts')
    @include('vendor.datatables.js')
    {!! $dataTable->scripts() !!}


    <script>
        $('#produtosdt').on('draw.dt', function () {
            bindBotoesDisponibilidade();
        } );


        function bindBotoesDisponibilidade() {
            $("form.disponibilidade").submit(function(ev) {
                ev.preventDefault();
                let url = ev.target.action;
                let params = $(ev.target).serialize();

                console.log(url, params);


                $.ajax({
                    url: url,
                    type: 'PATCH',
                    data: params,
                    complete: function (jqXHR, textStatus) {
                        LaravelDataTables.produtosdt.draw();
                    }
                });
            });
        }
    </script>

@endsection
