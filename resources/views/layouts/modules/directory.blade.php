<div class="box form-section" id="user-details">
    <div class="box-header">
        <h5 class="box-title">Directory Item
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
                    <label class="control-label">Avatar</label>
                    <div class="media">
                        <div class="pull-left text-center avatar-box">
                        @if (isset($form_data[$table_name]['image']) && $form_data[$table_name]['image'])
                            <img src="{{ getImage($form_data[$table_name]['image'], 100, 100) }}" alt="{{ $form_data[$table_name]['name'] }}">
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
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Type</label>
                    <div>
                        <select name="type" id="type" class="form-control" data-mandatory="yes">
                            <option value="NGO">NGO</option>
                            <option value="Recycler">Recycler</option>
                            <option value="Scrap Collector">Scrap Collector</option>
                            <option value="Social Enterpreneur">Social Enterpreneur</option>
                            <option value="Academic Expert">Academic Expert</option>
                            <option value="Industry Expert">Industry Expert</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <div>
                        <input type="text" name="name" id="name" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Contact Person</label>
                    <div>
                        <input type="text" name="contact_person" id="contact_person" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Contact No</label>
                    <div>
                        <input type="text" name="contact_no" id="contact_no" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <div>
                        <input type="text" name="address" id="address" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Short Info</label>
                    <div>
                        <textarea id="short_info" name="short_info" class="form-control text-editor"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
