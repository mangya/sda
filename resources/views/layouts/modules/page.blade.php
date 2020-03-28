<div class="box form-section" id="blog-details">
    <div class="box-header">
        <h5 class="box-title">Page Details
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </h5>
    </div>
    <div class="box-body form-content">
	    <div class="row">
	    	<div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Title</label>
                    <div>
                        <input type="text" name="title" id="title" class="form-control" data-mandatory="yes" autocomplete="off">
                        <input type="hidden" name="code" id="code" autocomplete="off">
                    </div>
                </div>
            </div>
            @if (isset($form_data[$table_name]['slug']) && $form_data[$table_name]['slug'])
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">URL</label>
                    <div>
                        <a href="{{config('app.url')}}/info/{{ $form_data[$table_name]['slug'] }}" target="_new">{{config('app.url')}}/info/{{ $form_data[$table_name]['slug'] }}
                        </a>
                    </div>
                </div>
            </div>
            @endif
			@if(Auth::user()->role == 'Administrator')
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Is Active</label>
                    <div>
                        <select name="is_active" id="is_active" class="form-control" data-mandatory="yes">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Is Approved</label>
                    <div>
                        <select name="is_approved" id="is_approved" class="form-control" data-mandatory="yes">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
            </div>
            @endif
	    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Content</label>
                    <div>
                        <textarea id="content" name="content" class="form-control text-editor"></textarea>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>