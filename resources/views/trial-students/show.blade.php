<h1>詳細画面</h1>

<form action="{{route('trial-students.update',$trialStudent)}}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label for="name">名前</label>
        <input type="text" id="name"  name="name" value="{{old('name',$trialStudent->name)}}">
    </div>

    <div>
        <label for="birthday">生年月日</label>
        <input type="date" id="birthday"  name="birthday" value="{{old('birthday',$trialStudent->birthday)}}">
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
        <input type="date" id="trial_date"  name="trial_date" value="{{old('trial_date',$trialStudent->trial_date)}}">
    </div>

    <div>
        <label for="join_month">入会月</label>
        <input type="month" id="join_month" name="join_month" value="{{old('join_month',$trialStudent->join_month)}}">
    </div>

    <div>
        <button type="submit">更新</button>
    </div>

</form>