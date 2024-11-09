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
                    <button class="btn btn-sm" id="add-filter">Add Filter</button>
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
        <div class="box-header brd-top list-column-filters" data-filter-no="1" style="display: none;">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control" name="column_name">
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control" name="column_operator">
                            <option value="=">Equals</option>
                            <option value="!=">Not Equals</option>
                            <option value="like">Like</option>
                            <option value="in">In</option>
                            <option value="notin">Not In</option>
                            <option value=">">></option>
                            <option value="<"><</option>
                            <option value=">=">>=</option>
                            <option value="<="><=</option>
                            <option value="between">Between</option>
                            <option value="notbetween">Not Between</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group column-value-container">
                        <input type="text" name="column_value" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <button class="btn btn-success btn-sm apply-column-filters">
                            Apply
                        </button>
                        <button class="btn btn-danger btn-sm remove-column-filters">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body no-padding table-responsive list-content">
            <div class="record-selected-count" style="display: none;"></div>
            <table class="table table-hover list-view" data-module="">
                <thead>
                    <tr class="list-header">
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
                    <td>{{$key}}</td>
                    <td>{{$tagDetails->id}}</td>
                    <td>{{$tagDetails->treeName}}</td>
                    <td>{{date('d-m-Y',strtotime($tagDetails->date_of_plantation))}}</td>
                    <td>{{ $tagDetails->tree_status == 1 ? 'Alive' : 'Dead'}}</td>
                    <td><a href="{{ route('show.app.printQRCode', $tagDetails->id) }}"> Generate QR Code</a></td>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset(mix('js/origin_list_view.js')) }}"></script>
@endpush
