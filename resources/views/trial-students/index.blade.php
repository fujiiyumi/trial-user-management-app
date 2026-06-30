<x-app-layout>
<x-slot name="header">
    <a href="{{route('trial-students.create')}}"
    class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-700 transition shadow-xl">
        新規作成
    </a>
    </x-slot>

<table class="w-full border-collapse">
    <tr>
        <th class="bg-yellow-300 px-4 py-3 text-left border-b border-gray-500">名前</th>
        <th class="bg-yellow-300 px-4 py-3 text-left border-b border-gray-500">学年</th>
        <th class="bg-yellow-300 px-4 py-3 text-left border-b border-gray-500">ステータス</th>
        <th class="bg-yellow-300 px-4 py-3 text-left border-b border-gray-500">体験日</th>
        <th class="bg-yellow-300 px-4 py-3 text-left border-b border-gray-500">入会月</th>
        <th class="bg-yellow-300 px-4 py-3 text-left border-b border-gray-500">要確認</th>
        <th class="bg-yellow-300 px-4 py-3 text-left border-b border-gray-500">詳細</th>
    </tr>

    @foreach($trialStudents as $trialStudent)
    <tr class="hover:bg-rose-50">
        <td class="px-4 py-3 border-b border-gray-400">{{$trialStudent->name}}</td>
        <td class="px-4 py-3 border-b border-gray-400">{{$trialStudent->grade}}</td>
        <td class="px-4 py-3 border-b border-gray-400">{{$trialStudent->status}}</td>
        <td class="px-4 py-3 border-b border-gray-400">{{$trialStudent->trial_date}}</td>
        <td class="px-4 py-3 border-b border-gray-400">{{$trialStudent->join_month}}</td>
        <td class="px-4 py-3 border-b border-gray-400">{{$trialStudent->has_unread_comment ? '⚫︎' : ''}}</td>
        <td class="px-4 py-3 border-b border-gray-400">
            <a href="{{route('trial-students.show',$trialStudent)}}"
            class="bg-rose-500 text-white px-2 py-1 rounded-md  hover:bg-rose-700 transition shadow-md">
                詳細
            </a>
        </td>
    </tr>
    @endforeach
</table>
</x-app-layout>