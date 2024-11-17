@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb app-breadcrumb">
        <li>
            <a href="{{ route('show.app.modules') }}"><strong>Home</strong></a>
        </li>
        <li class="active">
            Geotags
        </li>
    </ol>
@endsection

@section('title_section')
    <div id="sticky-anchor"></div>
    <section class="content-header title-section" id="sticky">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-7">
                <div class="form-name">
                    <i class="fa fa-list"></i> Geotags List
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-5 text-right">
                
                
            </div>
        </div>
    </section>
@endsection

@section('body')
    <div class="box n-m-b">
        <div class="box-header list-actions">
            <div class="row">

                <div class="col-md-9 col-sm-6 col-xs-6">
                    <select id="tree_plantation_drive_id" name="tree_plantation_drive_id" class="form-control" style="display: inline-block; width: auto;">
                        <option value="" default selected>Select Drive</option>
                        @foreach(SDA\TreePlantationDrive::getDropdownList() as $id => $name)
                            <option value="{{ $id }}">
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>


                    <button class="btn btn-sm" id="submit-filter">Submit</button>
                    <button class="btn btn-sm" id="add-filter">Print Selected codes</button>
                    <div class="list-active-filters" style="display: none;"></div>
                </div>     

                <div class="col-md-3 col-sm-6 col-xs-6 text-right">
                    <div class="dropdown list-dropdown-field">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="text-muted text-xs block fw-600" id="sort-field" data-value="">
                                    
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu list-column-dropdown">
                            
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="box-body no-padding table-responsive list-content">
            <table class="table table-hover list-view" data-module="">
                <thead>
                    <tr class="list-header">
                    <th name="" valign="middle">
                                <input type="checkbox" id="master-checkbox" class="checkedIds"/>
                            </th>
                            <th name="" valign="middle">
                                {{ awesome_case("Sr. No") }}
                            </th>
                            <th name="" valign="middle">
                                {{ awesome_case("Tree ID") }}
                            </th>
                            <th name="" valign="middle">
                                {{ awesome_case("Tree Name") }}
                            </th>
                            <th name="" valign="middle">
                                {{ awesome_case("Date Of Plantation") }}
                            </th>
                            <th name="" valign="middle">
                                {{ awesome_case("Tree Status") }}
                            </th>
                            <th name="" valign="middle">
                                {{ awesome_case("Generate QR") }}
                            </th>
                    </tr>
                </thead>
                <tbody class="list-view-items">
                    @foreach($tagList as $key => $tagDetails)
                    <tr>
                        <td><input type="checkbox" name="checkedIds[]" value="{{$tagDetails->id}}" class="checkedIds"/></td>
                        <td>{{$key+1}}</td>
                        <td>{{$tagDetails->id}}</td>
                        <td>{{$tagDetails->treeName}}</td>
                        <td>{{date('d-m-Y',strtotime($tagDetails->date_of_plantation))}}</td>
                        <td>{{ $tagDetails->tree_status == 1 ? 'Alive' : 'Dead'}}</td>
                        <td><a href="{{ route('show.app.printQRCode', $tagDetails->id) }}"> Generate QR Code</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection

@push('scripts')
    <!--<script type="text/javascript" src="{{ asset(mix('js/origin_list_view.js')) }}"></script>-->
    <script>
    $(document).ready(function() {
        $('#add-filter').click(function() {
            // Collect all checked checkboxes
            var selectedIds = [];

            $('input[name="checkedIds[]"]:checked').each(function() {
                selectedIds.push($(this).val());
            });


            if (selectedIds.length > 0) {
                var idsString = selectedIds.join(',');
                window.location.href = "{{ route('show.app.printBulkQRCode', '') }}" + '/' + idsString;
            } else {
                alert("No IDs selected!");
            }
        });

        $('#master-checkbox').click(function() {
            var isChecked = $(this).is(':checked');
            $('.checkedIds').prop('checked', isChecked);
        });

        // Filter submit button
        $('#submit-filter').click(function() {
            var driveId = $('#tree_plantation_drive_id').val();

            $.ajax({
                url: "{{ route('api.filter.geotagList') }}",
                type: 'GET',
                data: { treePlantationDriveId: driveId },
                success: function(data) {
                    $('.list-view-items').html(data);
                },
                error: function(xhr) {
                    console.error(xhr);
                    alert('Error fetching data.');
                }
            });
        });
    });
</script>
@endpush
