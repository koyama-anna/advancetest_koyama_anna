<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    
    <style>

    </style>
</head>
<body>
    <div class="contact">
        <h1 class="contact-ttl">お問い合わせ</h1>
        <form action="/confirm" method="POST" class="h-adr">
        @csrf
            <table class="contact-table">
                <tr>
                    <th class="contact-item">
                        <div class="contact-item-name">お名前<span class="contact-item-a">※</span></div>
                    </th>
                    <td class="contact-body form-fullname">
                        <div class="fullname">
                        <input type="text" class="form-name" name="firstname" value="{{old('firstname')}}" required>
                        <input type="text" class="form-name" name="lastname" value="{{old('lastname')}}" required>
                        </div>
                        
                            <div class="example example-name">
                                <span class="firstname">例）山田</span>
                                <span class="lastname">例）太郎</span>
                            </div>
                            <div class="err_firstname" id="err_firstname"></div>
                            <div class="err_lastname" id="err_lastname"></div>
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
                        <input type="email" name="email" class="form-text" value="{{old('email')}}" required>
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
                            <span class="p-country-name" style="display:none;">Japan</span>
                            <span class="postcode-mark">〒</span>
                            <input type="text" name="postcode" class="p-postal-code postcode-textarea" value="{{old('postcode')}}" required>
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
                        <input type="text" name="address" class="form-text p-region p-locality p-street-address p-extended-address" value="{{old('address')}}" required>
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
                        <input type="text" name="building_name" class="form-text" value="{{old('building_name')}}">
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
                        <textarea name="opinion" class="contact-textarea" required>{{old('opinion')}}</textarea>
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