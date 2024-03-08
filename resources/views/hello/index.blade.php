<html>
    <head>
        <title>Hello/Index</title>
        <style>
            body {font-size: 16pt; color:#999; }
            h1 { font-size:100pt; text-align:right; color:#eee;
            margin: -40px 0px -50px 0px; }
        </style>
    </head>
    <body>
         <h1>Blade/Index</h1>
         @isset ($msg)
         <p>こんにちは、{{$msg}}さん。</p>
         @else
         <p>なにか書いて下さい。</p>
         @endisset
         <form method="post" action="/laravelapp/hello">
            @csrf
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>            
</html>