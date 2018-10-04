@extends('main')

@section('has_class','has class')
@section('title','| QR GENERATOR')
@section('content_header','QR Generator')
@section('content_subheader','Generate QR for registered employee')
@section('breadcrumb','QR Generator')


@section('content')
<div class="card">
                    <div class="card-header">
                        <h5>Buttons</h5>
                        <span>Select provides a number of buttons that can be used with the Buttons extension for DataTables. Buttons is a framework providing common options, styling and API methods for buttons that can control a DataTable.</span>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="button-select_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="dt-buttons"><a class="dt-button buttons-selected disabled" tabindex="0" aria-controls="button-select" href="#"><span>Selected</span></a><a class="dt-button buttons-selected-single disabled" tabindex="0" aria-controls="button-select" href="#"><span>Selected single</span></a><a class="dt-button buttons-select-all" tabindex="0" aria-controls="button-select" href="#"><span>Select all</span></a><a class="dt-button buttons-select-none disabled" tabindex="0" aria-controls="button-select" href="#"><span>Deselect all</span></a><a class="dt-button buttons-select-rows active" tabindex="0" aria-controls="button-select" href="#"><span>Select rows</span></a><a class="dt-button buttons-select-columns" tabindex="0" aria-controls="button-select" href="#"><span>Select columns</span></a><a class="dt-button buttons-select-cells" tabindex="0" aria-controls="button-select" href="#"><span>Select cells</span></a></div><div id="button-select_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="button-select"></label></div><table id="button-select" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="button-select_info">
                                <thead>
                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 199px;">Name</th><th class="sorting_asc" tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 319px;" aria-sort="ascending">Position</th><th class="sorting" tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 146px;">Office</th><th class="sorting" tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 70px;">Age</th><th class="sorting" tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 142px;">Start date</th><th class="sorting" tabindex="0" aria-controls="button-select" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 116px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="">Airi Satou</td>
                                        <td class="sorting_1">Accountant</td>
                                        <td class="">Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Garrett Winters</td>
                                        <td class="sorting_1">Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Angelica Ramos</td>
                                        <td class="sorting_1">Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Paul Byrd</td>
                                        <td class="sorting_1">Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Yuri Berry</td>
                                        <td class="sorting_1">Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Fiona Green</td>
                                        <td class="sorting_1">Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Donna Snider</td>
                                        <td class="sorting_1">Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Serge Baldwin</td>
                                        <td class="sorting_1">Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Gavin Joyce</td>
                                        <td class="sorting_1">Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Jonas Alexander</td>
                                        <td class="sorting_1">Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table><div class="dataTables_info" id="button-select_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="button-select_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="button-select_previous"><a href="#" aria-controls="button-select" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="button-select" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="button-select" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="button-select" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="button-select" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="button-select" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="button-select" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="button-select_next"><a href="#" aria-controls="button-select" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                        </div>
                    </div>
                </div>

@endsection