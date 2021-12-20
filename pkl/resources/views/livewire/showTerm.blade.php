<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Search" wire:model="searchTerm" />
                        <div class="input-group-prepend">
                            <a href="javascript:search()" class="input-group-text btn">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped projects">
                <thead>
                    <th>Word</th>
                    <th>FAQ_Id</th>
                    <th>Freq</th>
                </thead>
                <tbody>
                    @foreach ($data as $term)
                        <tr>
                            <td>{{ $term->word }}</td>
                            <td>{{ $term->faq_id }}</td>
                            <td>{{ $term->freq }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
