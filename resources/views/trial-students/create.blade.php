<a href="{{route('trial-students.index')}}">
    一覧に戻る
</a>

<h2>新規登録</h2>

<form action="{{route('trial-students.store')}}" method="post">
    @csrf
    <label for="name">名前</label>
    <input type="text" id="name" name="name" value="{{old('name')}}">

    <label for="birthday">生年月日</label>
    <input type="date" id="birthday" name="birthday" value="{{old('birthday')}}">

    <label for="status">ステータス</label>
    <select name="status" id="status">
        <option value="">選択してください</option>
        <option value="問い合わせ" {{old('status') === '問い合わせ' ? 'selected':''}}>問い合わせ</option>
        <option value="体験" {{old('status')==='体験'?'selected':''}}>体験</option>
        <option value="入会決定" {{old('status') === '入会決定' ?'selected' : ''}}>入会決定</option>
        <option value="申込済み" {{old('status')=== '申込済み' ?'selected' : ''}}>申込済み</option>
        <option value="在籍中" {{old('status') === '在籍中' ?'selected' :''}}>在籍中</option>
        <option value="退会・キャンセル" {{old('status') === '退会・キャンセル' ?'selected' :''}}>退会・キャンセル</option>
    </select>

    <label for="trial_date">体験日</label>
    <input type="date" id="trial_date" name="trial_date" value="{{old('trial_date')}}">

    <label for="join_month">入会月</label>
    <input type="month" id="join_month" name="join_month" value="{{old('join_month')}}">

    <button type="submit">登録</button>
</form>