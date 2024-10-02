<div class="box form-section" id="blog-details">
    <div class="box-header">
        <h5 class="box-title">Tree Plantation Drive Details
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

            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Tree Plantation Drive Summary / Info </label>
                    <div>
                        <textarea style="width: 400px; height: 200px;" cols=10 rows="10" name="summary" data-mandatory="yes"></textarea>
                    </div>
                </div>
            </div>
			
	    </div>
    </div>
</div>