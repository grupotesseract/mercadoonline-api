<!DOCTYPE html>
<html lang="pt-br">

<head>
  <base href="/" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ config('app.name') }} | Login</title>
  <meta name="description" content="Meu Mercado Online • Gerenciamento de mercados de pequeno porte" />

  @include('auth.css')
</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">

              <form method="post" action="{{ url('/login') }}">
                {!! csrf_field() !!}

                <h1>Login</h1>
                <p class="text-muted">Faça login com sua conta</p>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>

                  <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    placeholder="E-mail" name="email" @if (env('APP_ENV')==='local' )
                    value="admin@grupotesseract.com.br" @else value="{{ old('email') }}" @endif />

                  @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>

                  <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                    placeholder="Senha" name="password" autocomplete="off" />

                  @if ($errors->has('password'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="row">
                  <div class="col-12 text-right">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script async src="http://localhost:3000/browser-sync/browser-sync-client.js?v=2.26.12"></script>
</body>

</html>
