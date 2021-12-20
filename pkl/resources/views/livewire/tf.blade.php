<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Category</th>
                <th>Question</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $datas)
            <tr>
                <td>{{ $datas->system->title }}</td>
                <td>{{ $datas->question }}</td>
                <td>{{ $datas->answer }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
