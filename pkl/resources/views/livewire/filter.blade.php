<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>question</th>
                    <th>answer</th>
                </tr>
                @foreach($users as $faq)
                <tr>
                    <td>
                        {{ $faq->question }}
                    </td>
                    <td>
                        {{ $faq->answer }}
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $faq->links() }}
        </div>
    </div>
</div>