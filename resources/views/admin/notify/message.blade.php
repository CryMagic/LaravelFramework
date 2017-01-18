<div id="messages" class="col-md-8 col-md-offset-2 text-center">
	@if (session('messages'))
        <div class="alert alert-error alert-dismissible fade in">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Thông báo:</strong> {{ session('messages') }}.
        </div>
	@endif
</div>