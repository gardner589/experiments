
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table{
        display: table;
        border: 2px solid maroon;
        border-collapse: collapse;
      }
      table tr:nth-child(even){
        background: #999;
        color: white;
      }
      table td{
        border: 2px solid maroon;
      }
      table tr:nth-child(even) a{
        color: white;
      }
      body{
        width: 95vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
    </style>
  </head>
  <body>
    <table style="width: 80vw; margin:auto;">
      <thead>
        <th>Addr</th>
        <th>Long</th>
        <th>Short</th>
      </thead>
      <tbody>
        @foreach ($urls as $url)
          <tr>
            <td>{{$url->ip_addr}}</td>
            <td>
              <a href="{{$url->long}}">
                {{str_limit($url->long, 35)}}
              </a>
            </td>
            <td align="center">{{$url->shortened}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
