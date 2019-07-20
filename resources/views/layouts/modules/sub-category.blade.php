<div class="box form-section" id="sub-category-details">
    <div class="box-header">
        <h5 class="box-title">Sub Category Details
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
	                <label class="control-label">Is Active</label>
	                <div>
	                    <select name="is_active" id="is_active" class="form-control" data-mandatory="yes">
	                        <option value="0">No</option>
                            <option value="1">Yes</option>
	                    </select>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>