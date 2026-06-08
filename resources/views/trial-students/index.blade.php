<x-app-layout>
<h2>体験者一覧</h2>

<table>
    <tr>
        <th>名前</th>
        <th>学年</th>
        <th>ステータス</th>
        <th>体験日</th>
        <th>入会月</th>
        <th>要確認</th>
        <th>詳細</th>
    </tr>

    @foreach($trialStudents as $trialStudent)
    <tr>
        <td>{{$trialStudent->name}}</td>
        <td>{{$trialStudent->grade}}</td>
        <td>{{$trialStudent->status}}</td>
        <td>{{$trialStudent->trial_date}}</td>
        <td>{{$trialStudent->join_month}}</td>
        <td>{{$trialStudent->has_unread_comment ? '⚫︎' : ''}}</td>
        <td>
            <a href="{{route('trial-students.show',$trialStudent)}}">
                詳細
            </a>
        </td>
    </tr>
    @endforeach
</table>
</x-app-layout>