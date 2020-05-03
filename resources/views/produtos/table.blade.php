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
            bindBotoesConfirmacao();
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

        function bindBotoesConfirmacao() {
            $("form.confirmacao").submit(function(ev) {
                ev.preventDefault();
                let url = ev.target.action;
                let params = $(ev.target).serialize();

                console.log(ev, url, params);

                $.ajax({
                    url: url,
                    type: ev.target.method,
                    data: params,
                    success: function (jqXHR, textStatus, data) {
                        console.log('sucesso');
                        LaravelDataTables.produtosdt.draw();
                        $('#msg-faltando').text(data.responseJSON.mensagemFaltando);
                        $('#msg-confirmacao').text(data.responseJSON.mensagemConfirmacao);
                        $('#total').text(data.responseJSON.total);
                    }
                });
            });
        }
    </script>

@endsection
