<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理システム</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/system.css') }}">
    <style>
        
    </style>
</head>
<body>
    <div class="system">
        <h1 class="ttl">管理システム</h1>
            <div class="search">
                <form action="/search" method="post">
                    @csrf
                    <div class="name-gender">
                        <div class="name">
                            <span class="content-ttl name-ttl">お名前</span>
                            <input type="text" name='fullname' class="fullname-txt">
                        </div>
                        <div class="gender">
                            <span class="content-ttl gender-ttl">性別</span>
                            <div class="select">
                            <div class="gender-select"><input type="radio" name="gender_id"  value="3" checked>全て</div>
                            <div class="gender-select"><input type="radio" name="gender_id"  value="1" >男性</div>
                            <div class="gender-select"><input type="radio" name="gender_id"  value="2" >女性</div>
                            </div>
                        </div>
                    </div>
                    <div class="date">
                        <span class="content-ttl date-ttl">登録日</span>
                        <input type="date" name="from" class="date1">
                        <span class="wave">〜</span>
                        <input type="date" name="until" class="date2">
                    </div>
                    <div class="email">
                        <span class="content-ttl email-ttl">メールアドレス</span>
                        <input type="email" name="email" class="email-txt">
                    </div>
                    <button type="submit" class="serch-btn" >検索</button>
                    <input type="reset" value="リセット" class="reset">

                </form>
            </div>
            @if (!empty($contents))
            <div class="paginate">
                    <p class="serchno">全{{ $contents->total() }}件中 
                        {{  ($contents->currentPage() -1) * $contents->perPage() + 1}} 〜 
                        {{ (($contents->currentPage() -1) * $contents->perPage() + 1) + (count($contents) -1)  }}件</p>
                        <div class="pageno">{{$contents->appends(request()->input())->render('vendor.pagination.default')}}</div>
                    </div>
                    @else
                <p class="datanone">データがありません。</p>
                @endif 


            <div class="result">
                
                <div class="pnd">
                    

            
            </div>
                <table class="result-table">
                    <tr class="result-ttl">
                        <th class="r-id">ID</th>
                        <th class="r-name">お名前</th>
                        <th class="r-gender">性別</th>
                        <th class="r-email">メールアドレス</th>
                        <th class="r-opinion">ご意見</th>
                        <th class="r-delete"></th>
                    </tr>
                    @if(isset($contents))
                    @foreach($contents as $content)
                    <tr class="result-content">
                        <form action="/remove" method="get" class="content_remove">
                            @csrf
                        <td class="r-icontent">{{$content->id}}</td>
                        <td class="r-icontent">{{$content->fullname}}</td>
                        <td class="r-icontent">
                            @if($content->gender_id==1)男性@endif
                            @if($content->gender_id==2)女性@endif
                        </td>
                        <td class="r-icontent">{{$content->email}}</td>
                        <td class="r-icontent opinion-view">
                            <p>
                                @if(mb_strlen($content->opinion)>=25){{mb_substr($content->opinion,0,25)}}...@endif
                                @if(mb_strlen($content->opinion)<25){{$content->opinion}}@endif
                            </p>
                            <p>{{$content->opinion}}</p>
                        </td>
                        <input type="hidden" name='id' value="{{$content->id}}">
                        <input type="hidden" name='fullname' value="{{$content->fullname}}">
                        <input type="hidden" name='gender_id' value="{{$content->gender_id}}">
                        <input type="hidden" name='email' value="{{$content->email}}">
                        <input type="hidden" name='postcode' value="{{$content->postcode}}">
                        <input type="hidden" name='address' value="{{$content->address}}">
                        <input type="hidden" name='opinion' value="{{$content->opinion}}">
                        <td class="remove"><button type="submit" class="remove-btn">削除</button></td>
                        </form>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
        
    </div>
</body>
</html>