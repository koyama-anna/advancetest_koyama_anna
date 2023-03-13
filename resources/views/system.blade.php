<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理システム</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">

    <style>
        .system{
            width: 1000px;
            margin: 0 auto;
            padding: 40px 0;
        }
        
        .search{
            border: 1px solid black;
            padding: 15px 20px;
        }

        .ttl{
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .content-ttl{
            display: inline-block;
            width: 15%;
            font-size: 15px;
            font-weight: bold;
            padding: 10px 20px;
            
        }

        .fullname-txt,
        .date1,
        .date2,
        .email-txt{
            box-sizing: border-box;
            width: 200px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .name-ttl{
            width: 115px;
        }

        .gender{
            display: flex;
            justify-content: flex-start;
            width: 50%;
            padding-left: 15px
        }

        .select{
            display: flex;
            justify-content: flex-start;
            
        }

        .gender-select{
            margin-right: 10px;
        }

        input[type="radio"] , input[type="checkbox"]{
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
            margin-right: 0.5em;
            margin-bottom: 5px;
        }

        .select{
            padding: 10px 0;
        }


        .name-gender,
        .date,
        .email{
            box-sizing: border-box;
            margin: 10px 0;
        }

        .name-gender{
            display: flex;
            justify-content: flex-start;
            width: 100%;
        }

        .wave{
            margin: 0 15px;
        }

        .serch-btn{
            width: 150px;
            background-color: black;
            color: white; 
            font-weight: bold; 
            display: block;
            margin: 0 auto;
            font-size: 16px; 
            padding: 10px; 
            border-radius: 10px; 
            border: none;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
        }

        .reset{
            background-color: transparent;
            border: none;
            cursor: pointer;
            outline: none;
            padding: 10px;
            appearance: none;
            display: block;
            margin: 0 auto;
            text-decoration: underline;
            font-size: 13px

        }

        #paging {
            margin: auto;
            text-align: center;
        }
        #paging ul {
            padding: 0;
        }
        #paging i {
            font-weight: bold;
        }
        #paging .not-allow i {
            font-weight: normal;
            opacity: 0.3;
        }
        .pagination {
            display: flex;
            justify-content: flex-end;
            margin: 0;
            list-style: none;
            border-radius: .25rem;
        }
        .pagination li {
            flex: 1 1 42px;
            max-width: 30px;
            min-width: 27px;
            float: left;
        }
        .active{
            box-sizing: border-box;
            padding-top: 7px;
            padding-left: 8px;
            color: #fff;
            background-color: black;
        }

        .disabled{
            box-sizing: border-box;
            padding-top: 7px;
            padding-left: 8px;
            border: 1px solid #ddd;
        }

        .pagination > li > a {
            display: inline-block;
            width: 100%;
            padding: 6px 0;
            color: inherit;
            background: #fff;
            border: 1px solid #ddd;
            border-right: 0;
            text-align: center;
        }
        .pagination > li:last-child > a,
        .pagination > .not-allow:first-child > a:hover {
            border-right: 1px solid #ddd;
        }
        .pagination > .active > a,
        .pagination > li > a:hover {
            color: #fff;
            background: black;
        }
        .pagination > .active > a:hover,
        .pagination > .not-allow > a:hover {
            cursor: text;
        }
        
        .post #paging {
            margin:20px 0 40px 0;
        }

        .page-item {
            margin-left: 5px;
            margin-right: 5px;
        }
        .pnd{
            display: flex;
            justify-content: space-between;
        }

        .result-table{
            width: 100%;
            box-sizing: border-box;
            text-align: left;
            
        }

        .result-ttl{
            border-bottom: solid 1px black;
        }
        
        .r-id{
            width: 25px;
            padding-right: 20px;
            padding: 15px 0;
        }

        .r-name{
            width: 10%;
        }

        .r-gender{
            width: 30px;
            padding-right: 20px;
        }

        .r-email{
            width: 20%;
        }


        .r-opinion{
            
            margin: 15px 40px;
        }

        .opinion-view p:nth-child(2){
            display: none;
        }

        .opinion-view:hover p:nth-child(1){
            display: none;
        }

        .opinion-view:hover p:nth-child(2){
            display: block;
        }

        .remove-btn{
            width: 70px;
            background-color: black;
            color: white; 
            font-weight: bold; 
            display: block;
            margin: 10px auto;
            font-size: 14px; 
            padding: 5px; 
            border-radius: 5px; 
            border: none;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
        }
        .paginate{
            display: flex;
            justify-content: space-between;
            box-sizing: border-box;
            margin: 30px 0 5px 0;
        }

        .datanone{
            margin:30px 0 5px 0;
        }

        .remove{
            display: flex;
            justify-content: flex-end;
        }

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
                        <div class="pageno">{{$contents->appends(request()->query())->render('vendor.pagination.default')}}</div>
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