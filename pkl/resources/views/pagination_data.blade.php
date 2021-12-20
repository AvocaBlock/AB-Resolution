<div class="row">
    <div class="col-lg-12">

        <table class="table table-bordered" id="laravel">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($data) && $data->count())
                    @foreach ($data as $faq)
                        <tr>
                            <td>{{ $faq->system->title }}</td>
                            <td>{{ $faq->question }}</td>
                            <td>{{ $faq->answer }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No data found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        {!! $data->links() !!}
    </div>
</div>
