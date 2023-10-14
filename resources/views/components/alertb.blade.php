@if(Session::get('success'))
<div class="col-md-6">
    <div id="alert" class="alert alert-success"
        style="width:300px;right: 36px;top: 60px;cursor: auto;opacity: 10;position: fixed;z-index: 1060;display: block !important;transition: visibility 0s 2s, opacity 20s linear;">
        <div class="d-flex justify-content-between">
            <div><span class="fa fa-check text-dark"></span> <strong>Successful</strong></div>
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <hr class="message-inner-separator">
        <p>{{ Session::get('success') }}</p>
    </div>
</div>
@endif

@if(Session::get('failed'))
<div class="col-md-6">
    <div id="alert" class="alert alert-danger"
        style="width:300px;right: 36px;top: 60px;cursor: auto;opacity: 10;position: fixed;z-index: 1060;display: block !important;transition: visibility 0s 2s, opacity 20s linear;">
        <div class="d-flex justify-content-between">
            <div><span class="fa fa-check text-dark"></span> <strong>Failed</strong></div>
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <hr class="message-inner-separator">
        <p>{{ Session::get('failed') }}</p>
    </div>
</div>
@endif

@if($errors->any())
<div class="col-md-6">
    <div id="alert" class="alert alert-danger"
        style="width:300px;right: 36px;top: 60px;cursor: auto;opacity: 10;position: fixed;z-index: 1060;display: block !important;transition: visibility 0s 2s, opacity 20s linear;">
        <div class="d-flex justify-content-between">
            <div><span class="fa fa-check text-dark"></span> <strong>Error</strong></div>
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <hr class="message-inner-separator">
        <p>{{$errors}}</p>
    </div>
</div>
@endif