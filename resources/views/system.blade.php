<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理システム</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">

    <style>





    </style>
</head>
<body>
    <div class="system">
        <h1 class="ttl">管理システム</h1>
            <div class="search">
                <form action="/search" method="post">
                    @csrf
                    
                </form>
            </div>
        
    </div>
</body>
</html>