<style>
    table {
        background: #fff;
        width: 100%;
        border: 0;
    }
    th {}
    td {
        border-top: 1px solid #999;
        padding: 5px;
    }
    tr:nth-child(odd) {
        background: #ddd;
    }
</style>
<table>
    <thead>
        <th>#</th>
        <th>Text</th>
        <th>Audio</th>
        <th>Meaning</th>
        <th>Created/Updated</th>
    </thead>
    <tbody>
        @php
        $fmt_ques = DB::table('fmt_lartrm_ques')->get();
        @endphp
        @foreach ($fmt_ques as $que)
        <tr>
            <td>{{$que->id}}</td>
            <td>
                {{$que->question}}
            </td>
            <td>
                @php $que_media = DB::table('media')->where('id', $que->media_id)->first() @endphp
                <audio controls="controls" src="{{url('/')}}/storage/{{$que_media->url}}"></audio>
            </td>
            <td>
                @php $ans = DB::table('fmt_lartrm_ans')->where('question_id', $que->id)->first() @endphp
                {{$ans->answer}}
            </td>
            <td style="font-size:12px;">
                <div>
                    <span>Created:</span>
                    {{date('d-n-Y, g:i a"',strtotime($que->created_at))}}
                </div>
                    <span>Updated:</span>
                    {{date('d-n-Y, g:i a"',strtotime($que->updated_at))}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
