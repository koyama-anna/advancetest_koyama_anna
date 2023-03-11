<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">

    <style>
        .contact{
            width: 750px;
            margin: 0 auto;
            padding: 40px 0;
        }

        .contact-ttl{
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .contact-table{
            width: 100%;
            margin-bottom: 20px;
        }

        .contact-item,
        .contact-body {
            padding: 15px;
        }

        .contact-item {

            font-size: 15px;
            text-align: left; 
            vertical-align: top;
            width: 25%;
        }

        .contact-item-a{
            color: red;
        }

        .gender{
            font-size: 15px;
        }

        .firstname,
        .lastname{
            font-size: 15px;
            color:#ccc;
            padding: 5px 15px;
        }

        

        .example-name{
            display: flex;
            justify-content: space-between;
            margin-top: 5px
        }

        .example-email,
        .example-postcode,
        .example-address,
        .example-building{
            font-size: 15px;
            color: #ccc;
            padding: 10px 20px;
        }
        
        .postcode_e{
            padding-left: 20px;
        }

        .fullname{
            display: flex;
            justify-content: space-between;
        }

        .firstname{
            margin-left: 15px;
        }

        .lastname{
            margin-right: 150px
        }

        .form-name{
            
            width: 44%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        .form-text{
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            
        }

        .postcode-mark{
            font-size: 15px;
            font-weight: bold;
            padding: 10px 10px;
        }

        .postcode-textarea {
            
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .postcode_txt{
            display: flex;
            justify-content: space-between;

        }

        .contact-textarea {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            height: 150px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .confirm-btn{
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
        <h1 class="contact-ttl">お問い合わせ</h1>
        <form action="/confirm" method="POST">
        @csrf
            <table class="contact-table">
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">お名前<span class="contact-item-a">※</span></div>
                    </th>
                    <td class="contact-body form-fullname">
                        <div class="fullname">
                        <input type="text" class="form-name" name="firstname" >
                        <input type="text" class="form-name" name="lastname" >
                        </div>
                        
                            <div class="example example-name">
                                <span class="firstname">例）山田</span>
                                <span class="lastname">例）太郎</span>
                            </div>
                            
                        @error('firstname')
                        <p class="error">{{$message}}</p>
                        @enderror
                        @error('lastname')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">性別<span class="contact-item-a">※</span></div>
                    </th>
                    <td class="contact-body gender">
                        <input type="radio" name="gender_id"  value="1" checked>男性
                        <input type="radio" name="gender_id"  value="2" >女性
                        @error('gender_id')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">メールアドレス<span class="contact-item-a">※</span></div>
                    </th>
                    <td class="contact-body">
                        <input type="email" name="email" class="form-text">
                            <div class="example-email">
                                <span class="email_e">例）test@example.com</span>
                            </div>
                            
                        @error('email')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">郵便番号<span class="contact-item-a">※</span></div>
                    </th>
                    <td class="contact-body postcode">
                        <div class="postcode_txt">
                            <span class="postcode-mark">〒</span>
                            <input type="text" name="postcode" class="postcode-textarea">
                        </div>
                            <div class="example-postcode">
                                <span class="postcode_e">例）123-4567</span>
                            </div>
                            
                        @error('postcode')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">住所<span class="contact-item-a">※</span></div>
                    </th>
                    <td class="contact-body">
                        <input type="text" name="address" class="form-text">
                        <div class="example-address">
                            <span class="address_e">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                        </div>

                            
                        @error('address')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">建物名</div>
                    </th>
                    <td class="contact-body">
                        <input type="text" name="building_name" class="form-text">
                        <div class="example-building">
                            <span class="building_e">例）千駄ヶ谷マンション101</span>
                        </div>
                        
                    @error('building_name')
                    <p class="error">{{$message}}</p>
                    @enderror

                            
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">ご意見<span class="contact-item-a">※</span></div>
                    </th>
                    <td class="contact-body">
                        <textarea name="opinion" class="contact-textarea"></textarea>
                        @error('opinion')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </td>
                </tr>

                
                
                
                
            </table>
            <button type="submit" class="confirm-btn" >確認</button>
        </form>
        
    </div>
</body>
</html>