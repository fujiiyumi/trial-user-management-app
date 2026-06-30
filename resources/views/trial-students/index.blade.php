<x-app-layout>
<x-slot name="header">
    <div class="flex items-center justify-between">
    <a href="{{route('trial-students.create')}}"
    class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-700 transition shadow-xl">
        新規作成
    </a>

    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit"
        class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-700 transition shadow-xl">
            ログアウト
        </button>
    </form>
    </div>
    </x-slot>

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