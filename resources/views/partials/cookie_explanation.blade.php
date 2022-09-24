{{-- Modal for cookie explanation --}}
<div class="modal fade" id="cookieExplanationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cookieExplanationModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieExplanationModalLabel">@lang('general.cookie-headline')</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body text-start">
                @lang('general.cookie-text-de')
                <hr>
                @lang('general.cookie-text-en')
            </div>
            <div class="modal-footer">
                <a href="{{ route('set-explanation') }}" class="btn btn-success" style="text-decoration: none; color: white !important; margin-left: auto; margin-right: auto;">
                    {!! IconHelper::agree() !!} @lang('general.cookie-accept-de') / @lang('general.cookie-accept-en')
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#cookieExplanationModal").modal('show');
    });
</script>
