<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ config('app.name') }}</title>
  <meta name="description" content="Meu Mercado Online • Gerenciamento de mercados de pequeno porte" />

  @include('layouts.prefetch')
  @include('layouts.css')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  @include('layouts.header')

  <div class="app-body">
    @include('layouts.sidebar')
    <main class="main">
      @yield('content')
    </main>
  </div>

  @include('layouts.js')
</body>

</html>
