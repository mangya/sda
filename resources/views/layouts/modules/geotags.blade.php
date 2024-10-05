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
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="form-group">
                    <select name="tree_id" class="form-control activity-filter">
                        <option value="" default selected>Select Tree</option>
                        @foreach(SDA\Tree::getDropdownList() as $id => $name)
                            <option value="{{ $id }}">
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="form-group">
                    <select name="tree_plantation_drive_id" class="form-control activity-filter">
                        <option value="" default selected>Select Drive</option>
                        @foreach(SDA\TreePlantationDrive::getDropdownList() as $id => $name)
                            <option value="{{ $id }}">
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="form-group">
                    <select name="tree_plantation_site_id" class="form-control activity-filter">
                        <option value="" default selected>Select Site</option>
                        @foreach(SDA\TreePlantationSite::getDropdownList() as $id => $name)
                            <option value="{{ $id }}">
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

	    <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Date of Plantation</label>
                    <div>
                        <input type="date" name="date_of_plantation" id="date_of_plantation" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>
			@if(Auth::user()->role == 'Administrator')
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Tree Status</label>
                    <div>
                        <select name="tree_status" id="tree_status" class="form-control" data-mandatory="yes">
                            <option value="1">Alive</option>
                            <option value="0">Dead</option>
                        </select>
                    </div>
                </div>
            </div>

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
                    <label class="control-label">Tree Longitude</label>
                    <div>
                        <input type="text" name="tree_longitude" id="tree_longitude" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Tree Lattitude</label>
                    <div>
                        <input type="text" name="tree_lattitude" id="tree_lattitude" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>

        </div>
	</div>
</div>