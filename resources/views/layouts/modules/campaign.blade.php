<div class="box form-section" id="campaign-details">
    <div class="box-header">
        <h5 class="box-title">Campaign Details
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
                    <label class="control-label">Name</label>
                    <div>
                        <input type="text" name="name" id="name" class="form-control" data-mandatory="yes" autocomplete="off">
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
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Category</label>
                    <div>
                        <input type="text" name="category" id="category" class="form-control autocomplete" data-mandatory="yes" autocomplete="off" data-ac-field="name" data-ac-module="Category">
                        <input type="hidden" name="category_id" class="form-control" data-ac-module="Category" data-ac-field="id" style="display: none;">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Sub Category</label>
                    <div>
                        <input type="text" name="sub_category" id="sub_category" class="form-control autocomplete" autocomplete="off" data-ac-field="name" data-ac-module="SubCategory">
                        <input type="hidden" name="sub_category_id" class="form-control" data-ac-module="SubCategory" data-ac-field="id" style="display: none;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Short Info</label>
                    <div>
                        <textarea id="short_info" name="short_info" class="form-control text-editor"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <div>
                        <textarea id="description" name="description" class="form-control text-editor"></textarea>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>