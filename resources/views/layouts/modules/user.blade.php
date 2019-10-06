<div class="box form-section" id="user-details">
    <div class="box-header">
        <h5 class="box-title">User Details
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
                        @if (isset($form_data[$table_name]['avatar']) && $form_data[$table_name]['avatar'])
                            <img src="{{ getImage($form_data[$table_name]['avatar'], 100, 100) }}" alt="{{ $form_data[$table_name]['full_name'] }}">
                        @else
                            <i class="fa fa-picture-o fa-2x avatar"></i>
                        @endif
                        </div>
                        <div class="media-body">
                            <label title="Upload image file" for="avatar" class="btn btn-primary btn-sm">
                                <input type="file" accept="image/*" name="avatar" id="avatar" class="hide">
                                Change
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Is Active</label>
                    <div>
                        <select name="is_active" id="is_active" class="form-control" data-mandatory="yes">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Full Name</label>
                    <div>
                        <input type="text" name="full_name" id="full_name" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <div>
                        <input type="text" name="email" id="email" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Login ID</label>
                    <div>
                        <input type="text" name="login_id" id="login_id" class="form-control" data-mandatory="yes" autocomplete="off">
                    </div>
                </div>
            </div>
            @if (!isset($form_data[$table_name]['id']))
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" name="password" class="form-control" data-mandatory="yes" autocomplete="off">
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Role</label>
                    <div>
                        <select name="role" id="role" class="form-control" data-mandatory="yes">
                            <option value="Administrator">Administrator</option>
                            <option value="Author">Author</option>
                            <option value="Member">Member</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box form-section" id="address-details">
    <div class="box-header">
        <h5 class="box-title">Address Details
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
                    <label class="control-label">Address</label>
                    <div>
                        <input type="text" name="address" id="address" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">City</label>
                    <div>
                        <input type="text" name="city" id="city" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">State</label>
                    <div>
                        <input type="text" name="state" id="state" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Pincode</label>
                    <div>
                        <input type="text" name="pincode" id="pincode" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <div>
                        <input type="text" name="country" id="country" class="form-control" autocomplete="off" value="India">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box form-section" id="other-details">
    <div class="box-header">
        <h5 class="box-title">Other Details
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </h5>
    </div>
    <div class="box-body form-content">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Contact</label>
                    <div>
                        <input type="text" name="mobile" id="mobile" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Gender</label>
                    <div>
                        <select name="gender" id="gender" class="form-control">
                            <option value=""></option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">DOB</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input type="text" name="dob" id="dob" class="form-control date" autocomplete="off">
                    </div>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Facebook URL</label>
                    <div>
                        <input type="text" name="facebook_url" id="facebook_url" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Twitter URL</label>
                    <div>
                        <input type="text" name="twitter_url" id="twitter_url" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
