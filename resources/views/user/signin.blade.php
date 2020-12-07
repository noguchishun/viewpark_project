<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <link href="/css/bootstrap.css" rel="stylesheet">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <style>
      body {
        font-family: 'Nunito';
      }
      </style>

    </head>

    <body class="antialiased">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1>Sign In</h1>
        @if(count($errors) >0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
          @endforeach
        </div>
        @endif

      <form action="{{ route('signin') }}" method="post">

        <div class="form-group">
          <label for="email">E-Mail</label>
          <input type="text" id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">ログイン</button>
        {{ csrf_field() }}

      </form>

    </div>
  </div>
  @endsection
  </body>
</html>
