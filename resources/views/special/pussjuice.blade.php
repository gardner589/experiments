<style media="screen">
  body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 98vw;
  }
</style>

<body>
  {!! Form::open(['url' => '/forni']) !!}

  {!! Form::label('qury', 'Query: ') !!}
  {!! Form::text('qury') !!}
  <br>
  <br>
  {!! Form::label('pg', 'Page: ') !!}
  {!! Form::number('pg') !!}
  <br>
  <br>
  <input id="btn" type="submit">

  {!! Form::close() !!}
</body>
