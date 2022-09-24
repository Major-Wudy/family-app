<div>

    <h5>
        Javascript Demos:
        <div class="text-muted" style="font-size: 14px;">Livewire has to be activated as feature for the demos to work: @if(Config::get('features.livewire')) <strong class="text-success">On</strong>  @else <strong class="text-danger">Off</strong> @endif</div>
    </h5>

    <br>

    {{-- Toast message demo #### Start #### --}}
    <button wire:click="toastMessage('success')" class="btn btn-success"><x-icon type="agree"/> Success Message</button>
    <button wire:click="toastMessage('error')" class="btn btn-danger"><x-icon type="cancel"/> Error Message</button>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div class="toast text-white {{ $toastBg }}" id="toastMessage">
            <div class="toast-header text-white {{ $toastBg }}">
                <strong class="me-auto">
                    @if($toastTopic == "success")
                        <x-icon type="check"/> Success Message
                    @else
                        <x-icon type="cross"/> Error Message
                    @endif
                </strong>
                <small>{{ StringHelper::convertDate(now(), true) }}</small>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                {{ $toastText }}
            </div>
        </div>
    </div>

    <script>
        Livewire.on('toastMessageEvent', function () {
            $("#toastMessage").toast("show");
        })
    </script>


    {{-- Toast message demo #### Ende #### --}}

</div>
