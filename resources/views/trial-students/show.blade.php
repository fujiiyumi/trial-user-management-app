<h2>コメント一覧</h2>

<a href="{{route('trial-students.index')}}">一覧に戻る</a>

<h3>問い合わせ</h3>
@foreach($trialStudent->comments->where('status','問い合わせ') as $comment)
<div>
    <p>{{$comment->comment}}</p>
    <small>{{$comment->created_at}}</small>
</div>
@endforeach

<h3>体験</h3>
@foreach($trialStudent->comments->where('status','体験') as $comment)
<div>
    <p>{{$comment->comment}}</p>
    <small>{{$comment->created_at}}</small>
</div>
@endforeach

<h3>入会決定</h3>
@foreach($trialStudent->comments->where('status','入会決定') as $comment)
<div>
    <p>{{$comment->comment}}</p>
    <small>{{$comment->created_at}}</small>
</div>
@endforeach

<h3>申込済み</h3>
@foreach($trialStudent->comments->where('status','申込済み') as $comment)
<div>
    <p>{{$comment->comment}}</p>
    <small>{{$comment->created_at}}</small>
</div>
@endforeach

<h3>在籍中</h3>
@foreach($trialStudent->comments->where('status','在籍中') as $comment)
<div>
    <p>{{$comment->comment}}</p>
    <small>{{$comment->created_at}}</small>
</div>
@endforeach

<h3>退会・キャンセル</h3>
@foreach($trialStudent->comments->where('status','退会・キャンセル') as $comment)
<div>
    <p>{{$comment->comment}}</p>
    <small>{{$comment->created_at}}</small>
</div>
@endforeach

<form action="{{route('trial-students.toggle-check',$trialStudent)}}" method="post">
@csrf
@method('PATCH')
<div>
<label for="has_unread_comment">要確認</label>
<input type="checkbox" name="has_unread_comment" id="has_unread_comment" value="1"
@checked($trialStudent->has_unread_comment)>
</div>

<div>
<button type="submit">保存</button>
</div>
</form>


<hr>


<h2>コメント追加</h2>

<form action="{{ route('comments.store',$trialStudent)}}" method="post">
    @csrf

    <div>
        <label for="status">ステータス</label>
        <select name="status" id="status">
            <option value="">選択してください</option>
            <option value="問い合わせ" @selected(old('status')==='問い合わせ' )>問い合わせ</option>
            <option value="体験" @selected(old('status')==='体験' )>体験</option>
            <option value="入会決定" @selected(old('status')==='入会決定' )>入会決定</option>
            <option value="申込済み" @selected(old('status')==='申込済み' )>申込済み</option>
            <option value="在籍中" @selected(old('status')==='在籍中' )>在籍中</option>
            <option value="退会・キャンセル" @selected(old('status')==='退会・キャンセル' )>退会・キャンセル</option>
        </select>
    </div>

    <div>
        <label for="comment">コメント</label>
        <textarea name="comment" id="comment">{{old('comment')}}</textarea>
    </div>

    <button type="submit">コメント追加</button>
</form>

<hr>

<h2>詳細画面</h2>

@if(session('success'))
<p>{{session('success')}}</p>
@endif

<form action="{{route('trial-students.update',$trialStudent)}}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label for="name">名前</label>
        <input type="text" id="name" name="name" value="{{old('name',$trialStudent->name)}}">
    </div>

    <div>
        <label for="birthday">生年月日</label>
        <input type="date" id="birthday" name="birthday" value="{{old('birthday',$trialStudent->birthday)}}">
    </div>

    <div>
        <label for="status">ステータス</label>
        <select name="status" id="status">
            <option value="問い合わせ" @selected(old('status',$trialStudent->status)=== '問い合わせ')>問い合わせ</option>
            <option value="体験" @selected(old('status',$trialStudent->status) === '体験')>体験</option>
            <option value="入会決定" @selected(old('status',$trialStudent->status) === '入会決定')>入会決定</option>
            <option value="申込済み" @selected(old('status',$trialStudent->status) === '申込済み')>申込済み</option>
            <option value="在籍中" @selected(old('status',$trialStudent->status) === '在籍中')>在籍中</option>
            <option value="退会・キャンセル" @selected(old('status',$trialStudent->status) === '退会・キャンセル')>退会・キャンセル</option>
        </select>
    </div>

    <div>
        <label for="trial_date">体験日</label>
        <input type="date" id="trial_date" name="trial_date" value="{{old('trial_date',$trialStudent->trial_date)}}">
    </div>

    <div>
        <label for="join_month">入会月</label>
        <input type="month" id="join_month" name="join_month" value="{{old('join_month',$trialStudent->join_month)}}">
    </div>

    <div>
        <button type="submit">更新</button>
    </div>

</form>