<div>
    <div class="form-group row">
        <label for="state" class="col-md-4 col-form-label text-md-right">Sistem</label>
        <div class="col-md-6">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>Pilih Sistem</option>
                @foreach($states as $state)
                    <option value="{{ $state->id }}">{{ $state->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
   
    @if (!is_null($selectedState))
        @foreach ($cities as $faq)
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
    @endif
</div>