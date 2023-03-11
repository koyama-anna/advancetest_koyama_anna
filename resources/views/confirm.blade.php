<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>確認画面</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">

    <style>
        .contact{
            width: 800px;
            margin: 0 auto;
            padding: 60px 0;
        }

        .contact-ttl{
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }

        .contact-table{
            width: 100%;
            margin-bottom: 20px;
        }

        .contact-item,
        .contact-body {
            padding: 20px;
        }

        .contact-item {
            font-size: 15px;
            text-align: left; 
            width: 30%;
        }

        .contact-item-a{
            color: red;
        }

        .contact-body {
            width: 100%;
            font-size: 15px;
        }

        .form-name{
            width: 30%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        .form-text{
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            max-width: 400px;
        }

        .postcode-textarea {
            width: 90%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            max-width: 400px;
        }
        .contact-textarea {
            width: 65%;
            padding: 10px;
            height: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .send-btn{
            width: 200px;
            background-color: black;
            color: white; 
            font-weight: bold; 
            display: block;
            margin: 0 auto;
            font-size: 16px; 
            padding: 15px; 
            border-radius: 10px; 
            border: none;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
        }




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
            <button type="submit" class="send-btn" >送信</button>
        </form>
        
    </div>
</body>
</html>