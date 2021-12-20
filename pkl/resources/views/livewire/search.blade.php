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
            @foreach ($users as $faq)
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#{{ 'ss-' . $faq->id }}">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                {{ $faq->question }}
                            </h4>
                        </div>
                    </a>
                    <div id="{{ 'ss-' . $faq->id }}" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>question</th>
                    <th>answer</th>
                </tr>
                @foreach ($users as $faq)
                <tr>
                    <td>
                        {{ $faq->question }}
                    </td>
                    <td>
                        {{ $faq->answer }}
                    </td>
                </tr>
                @endforeach
            </table> --}}
            {{ $users->links() }}
        </div>
    </div>
</div>
