<div class="box form-section" id="blog-details">
    <div class="box-header">
        <h5 class="box-title">Tree Details
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </h5>
    </div>
    <div class="box-body form-content">
	    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Tree Image</label>
                    <div class="media">
                        <div class="pull-left text-center avatar-box">
                        @if (isset($form_data[$table_name]['image']) && $form_data[$table_name]['image'])
                            <img src="{{ getImage($form_data[$table_name]['image'], 100, 100) }}" alt="{{ $form_data[$table_name]['title'] }}">
                        @else
                            <i class="fa fa-picture-o fa-2x avatar"></i>
                        @endif
                        </div>
                        <div class="media-body">
                            <label title="Upload image file" for="image" class="btn btn-primary btn-sm">
                                <input type="file" accept="image/*" name="image" id="image" class="hide">
                                Change
                            </label>
                        </div>
                    </div>
                </div>
            </div>
	    	<div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <div>
                        <input type="text" name="name" id="name" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Scientific Name</label>
                    <div>
                        <input type="text" name="scientific_name" id="scientific_name" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>
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
    </div>
</div>