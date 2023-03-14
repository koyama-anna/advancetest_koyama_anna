<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>確認画面</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
    <style>
        
    </style>
</head>
<body>
    <div class="contact">
        <h1 class="contact-ttl">内容確認</h1>
        <form action="/send" method="POST">
        @csrf
            <table class="contact-table">
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">お名前</div>
                    </th>
                    <td class="contact-body">
                        {{$inputs["firstname"]}}　{{$inputs["lastname"]}}
                        <input type="hidden" name="fullname" value="{{$inputs["firstname"]}}　{{$inputs["lastname"]}}">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">性別</div>
                    </th>
                    <td class="contact-body">
                        @if($inputs["gender_id"]==1)男性 @endif
                        @if($inputs["gender_id"]==2)女性 @endif
                        <input type="hidden" name="gender_id" value="{{$inputs["gender_id"]}}">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">メールアドレス</div>
                    </th>
                    <td class="contact-body">
                        {{$inputs["email"]}}
                        <input type="hidden" name="email" value="{{$inputs["email"]}}" >
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">郵便番号</div>
                    </th>
                    <td class="contact-body">
                        {{$inputs["postcode"]}}
                        <input type="hidden" name="postcode" value="{{$inputs["postcode"]}}">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">住所</div>
                    </th>
                    <td class="contact-body">
                        {{$inputs["address"]}}
                        <input type="hidden" name="address" value="{{$inputs["address"]}}">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">建物名</div>
                    </th>
                    <td class="contact-body">
                        {{$inputs["building_name"]}}
                        <input type="hidden" name="building_name" value="{{$inputs["building_name"]}}">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">ご意見</div>
                    </th>
                    <td class="contact-body">
                        {{$inputs["opinion"]}}
                        <input type="hidden" name="opinion" value="{{$inputs["opinion"]}}">
                    </td>
                </tr>
            </table>
            <button type="submit" class="send-btn" name="action" value="send">送信</button>
            
            <button type="button" class="fix-btn" value="fix" onclick="history.back()">修正する</button>
            
        </form>
    </div>
</body>
</html>