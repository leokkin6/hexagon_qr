@extends('main')

@section('has-class','has-class')
@section('title','| Gatekeeper')
@section('content_header','Surveillance')
@section('breadcrumb','Gatekeeper')

@section('content')
<div class="page-body">
                <!-- Cards -->
                <div class="row">
                    <!-- table card start -->
                    <div class="col-md-12 col-xl-4">
                        
                        <div class="card table-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-eye-alt text-success"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>10k</h5>
                                                <span>Visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-ui-music text-danger"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>100%</h5>
                                                <span>Volume</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-files text-info"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>2000 +</h5>
                                                <span>Files</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-envelope-open text-warning"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>120</h5>
                                                <span>Mails</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table card end -->
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <!-- table card start -->
                        <div class="card table-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div id="barchart" style="height:40px;width:40px;" class="rickshaw_graph"><svg width="40" height="40"><rect x="0" y="7.670236411396245" width="6.333333333333332" height="32.329763588603754" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="13.333333333333332" y="0.3960396039603964" width="6.333333333333332" height="39.603960396039604" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="26.666666666666664" y="15.752677308547183" width="6.333333333333332" height="24.247322691452815" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="6.333333333333332" y="31.91755910284906" width="6.333333333333332" height="8.082440897150938" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="19.666666666666664" y="20.602141846837743" width="6.333333333333332" height="19.397858153162254" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="33" y="27.876338654273592" width="6.333333333333332" height="12.123661345726408" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect></svg></div>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>1000</h5>
                                                <span>Shares</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-network text-primary"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>600</h5>
                                                <span>Network</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <div id="barchart2" style="height:40px;width:40px;" class="rickshaw_graph"><svg width="40" height="40"><rect x="0" y="28.684582743988685" width="6.333333333333332" height="11.315417256011315" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="13.333333333333332" y="20.602141846837743" width="6.333333333333332" height="19.397858153162254" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="26.666666666666664" y="8.478480501111338" width="6.333333333333332" height="31.52151949888866" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="6.333333333333332" y="8.478480501111338" width="6.333333333333332" height="31.52151949888866" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="19.666666666666664" y="4.437260052535867" width="6.333333333333332" height="35.56273994746413" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="33" y="0.3960396039603964" width="6.333333333333332" height="39.603960396039604" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect></svg></div>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>350</h5>
                                                <span>Returns</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-network-tower text-primary"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>100%</h5>
                                                <span>Connections</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table card end -->
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <!-- widget primary card start -->
                        <div class="card table-card widget-primary-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-3 card-block-big">
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>4000 +</h4>
                                        <h6>Ratings Received</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget primary card end -->
                        <!-- widget-success-card start -->
                        <div class="card table-card widget-success-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-3 card-block-big">
                                        <i class="icofont icofont-trophy-alt"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>17</h4>
                                        <h6>Achievements</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget-success-card end -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">
                                <div id="chartdiv" style="overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative; width: 100%; height: 100%;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 591px; height: 364px; padding: 0px; touch-action: auto; cursor: default;"><svg version="1.1" style="position: absolute; width: 591px; height: 364px; top: 0.390625px; left: -0.203125px;"><desc>JavaScript chart by amCharts 3.21.0</desc><g><path cs="100,100" d="M0.5,0.5 L590.5,0.5 L590.5,363.5 L0.5,363.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-bg"></path><path cs="100,100" d="M0.5,0.5 L482.5,0.5 L482.5,313.5 L0.5,313.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-plot-area" transform="translate(71,20)"></path></g><g><g class="amcharts-category-axis" transform="translate(71,20)"><g><path cs="100,100" d="M0.5,0.5 L0.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M0.5,313.5 L0.5,313.5 L0.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M40.5,0.5 L40.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M40.5,313.5 L40.5,313.5 L40.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M80.5,0.5 L80.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M80.5,313.5 L80.5,313.5 L80.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M121.5,0.5 L121.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M121.5,313.5 L121.5,313.5 L121.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M161.5,0.5 L161.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M161.5,313.5 L161.5,313.5 L161.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M201.5,0.5 L201.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M201.5,313.5 L201.5,313.5 L201.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M241.5,0.5 L241.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M241.5,313.5 L241.5,313.5 L241.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M281.5,0.5 L281.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M281.5,313.5 L281.5,313.5 L281.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M321.5,0.5 L321.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M321.5,313.5 L321.5,313.5 L321.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M362.5,0.5 L362.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M362.5,313.5 L362.5,313.5 L362.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M402.5,0.5 L402.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M402.5,313.5 L402.5,313.5 L402.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M442.5,0.5 L442.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M442.5,313.5 L442.5,313.5 L442.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M482.5,0.5 L482.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(0,313)" class="amcharts-axis-tick"></path><path cs="100,100" d="M482.5,313.5 L482.5,313.5 L482.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#52BEDB" class="amcharts-axis-grid"></path></g></g><g class="amcharts-value-axis value-axis-a1" transform="translate(71,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a2" transform="translate(71,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a3" transform="translate(71,20)" visibility="visible"></g></g><g transform="translate(71,20)" clip-path="url(#AmChartsEl-3)"><g visibility="hidden"></g></g><g></g><g></g><g></g><g><g transform="translate(71,20)" class="amcharts-graph-column amcharts-graph-g1"><g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(4,313)" visibility="visible" aria-label="distance 01 227"><path cs="100,100" d="M0.5,0.5 L0.5,-27.5 L32.5,-27.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(44,313)" visibility="visible" aria-label="distance 02 371"><path cs="100,100" d="M0.5,0.5 L0.5,-177.5 L32.5,-177.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(84,313)" visibility="visible" aria-label="distance 03 433"><path cs="100,100" d="M0.5,0.5 L0.5,-242.5 L32.5,-242.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(125,313)" visibility="visible" aria-label="distance 04 345"><path cs="100,100" d="M0.5,0.5 L0.5,-150.5 L32.5,-150.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(165,313)" visibility="visible" aria-label="distance 05 480"><path cs="100,100" d="M0.5,0.5 L0.5,-291.5 L32.5,-291.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(205,313)" visibility="visible" aria-label="distance 06 386"><path cs="100,100" d="M0.5,0.5 L0.5,-193.5 L32.5,-193.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(245,313)" visibility="visible" aria-label="distance 07 348"><path cs="100,100" d="M0.5,0.5 L0.5,-153.5 L32.5,-153.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(285,313)" visibility="visible" aria-label="distance 08 238"><path cs="100,100" d="M0.5,0.5 L0.5,-39.5 L32.5,-39.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(325,313)" visibility="visible" aria-label="distance 09 218"><path cs="100,100" d="M0.5,0.5 L0.5,-18.5 L32.5,-18.5 L32.5,0.5 L0.5,0.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g></g></g><g transform="translate(71,20)" class="amcharts-graph-line amcharts-graph-g2"><g></g><g clip-path="url(#AmChartsEl-5)"><path cs="100,100" d="M20.5,54.2108 L60.5,76.9972 L100.5,135.4656 L141.5,183.918 L181.5,240.5084 L221.5,182.5408 L261.5,189.0512 L301.5,191.3048 L341.5,153.244 M0,0 L0,0" fill="none" stroke-width="1" stroke-opacity="0.9" stroke="black" stroke-linejoin="round" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-5"><rect x="0" y="0" width="482" height="313" rx="0" ry="0" stroke-width="0"></rect></clipPath><g></g></g><g transform="translate(71,20)" class="amcharts-graph-line amcharts-graph-g3"><g></g><g clip-path="url(#AmChartsEl-6)"><path cs="100,100" d="M20.5,172.20286 L60.5,106.02571 L100.5,34.48286 L141.5,198.13714 L181.5,89.03429 L221.5,140.90286 L261.5,174.88571 L301.5,260.73714 L341.5,280.41143 M0,0 L0,0" fill="none" stroke-width="1" stroke-opacity="0.9" stroke="#E26A6A" stroke-linejoin="round" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-6"><rect x="0" y="0" width="482" height="313" rx="0" ry="0" stroke-width="0"></rect></clipPath><g></g></g></g><g></g><g><g class="amcharts-category-axis"><path cs="100,100" d="M0.5,0.5 L482.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#7D94A1" transform="translate(71,333)" class="amcharts-axis-line"></path></g><g class="amcharts-value-axis value-axis-a1"><path cs="100,100" d="M0.5,0.5 L0.5,313.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(71,20)" class="amcharts-axis-line" visibility="visible"></path></g><g class="amcharts-value-axis value-axis-a2"><path cs="100,100" d="M0.5,0.5 L0.5,313.5 L0.5,313.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(553,20)" class="amcharts-axis-line" visibility="visible"></path></g><g class="amcharts-value-axis value-axis-a3"><path cs="100,100" d="M0.5,0.5 L0.5,313.5 L0.5,313.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(553,20)" class="amcharts-axis-line" visibility="visible"></path></g></g><g><g transform="translate(71,20)" clip-path="url(#AmChartsEl-4)" style="pointer-events: none;"><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,313.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" class="amcharts-cursor-line amcharts-cursor-line-vertical" visibility="hidden" transform="translate(342,0)"></path><path cs="100,100" d="M0.5,0.5 L482.5,0.5 L482.5,0.5" fill="none" stroke-width="1" stroke="#000000" class="amcharts-cursor-line amcharts-cursor-line-horizontal" visibility="hidden" transform="translate(0,128)"></path></g><clipPath id="AmChartsEl-4"><rect x="0" y="0" width="482" height="313" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g></g><g><g transform="translate(71,20)" class="amcharts-graph-column amcharts-graph-g1"></g><g transform="translate(71,20)" class="amcharts-graph-line amcharts-graph-g2"><circle r="12.5" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(20,54)" aria-label="latitude/city 01 40.71" class="amcharts-graph-bullet"></circle><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(36,54)"><tspan y="6" x="0">New York</tspan></text><circle r="7" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(60,76)" aria-label="latitude/city 02 38.89" class="amcharts-graph-bullet"></circle><circle r="3" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(100,135) scale(1)" aria-label="latitude/city 03 34.22" class="amcharts-graph-bullet"></circle><circle r="3.5" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(141,183) scale(1)" aria-label="latitude/city 04 30.35" class="amcharts-graph-bullet"></circle><circle r="5" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(181,240) scale(1)" aria-label="latitude/city 05 25.83" class="amcharts-graph-bullet"></circle><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(189,240)"><tspan y="6" x="0">Miami</tspan></text><circle r="3.5" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(221,182) scale(1)" aria-label="latitude/city 06 30.46" class="amcharts-graph-bullet"></circle><circle r="5" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(261,189) scale(1)" aria-label="latitude/city 07 29.94" class="amcharts-graph-bullet"></circle><circle r="8" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(301,191) scale(1)" aria-label="latitude/city 08 29.76" class="amcharts-graph-bullet"></circle><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(312,191)"><tspan y="6" x="0">Houston</tspan></text><circle r="8.5" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(341,153) scale(1)" aria-label="latitude/city 09 32.8" class="amcharts-graph-bullet"></circle></g><g transform="translate(71,20)" class="amcharts-graph-line amcharts-graph-g3"><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(20,172)" aria-label="duration 01 06h 48min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(60,106)" aria-label="duration 02 08h 02min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(100,34) scale(1)" aria-label="duration 03 09h 22min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(141,198) scale(1)" aria-label="duration 04 06h 19min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(181,89) scale(1)" aria-label="duration 05 08h 21min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(221,140) scale(1)" aria-label="duration 06 07h 23min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(261,174) scale(1)" aria-label="duration 07 06h 45min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(301,260) scale(1)" aria-label="duration 08 05h 09min" class="amcharts-graph-bullet"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(341,280) scale(1)" aria-label="duration 09 04h 47min" class="amcharts-graph-bullet"></path></g></g><g><g></g></g><g><g class="amcharts-category-axis" transform="translate(71,20)" visibility="visible"><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" font-weight="bold" text-anchor="middle" transform="translate(20.083333352703832,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">Jan</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(60.08333335270383,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">02</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(100.08333335270383,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">03</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(141.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">04</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(181.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">05</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(221.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">06</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(261.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">07</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(301.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">08</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(341.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">09</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(382.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">10</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(422.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">11</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(462.08333335270385,325.5)" class="amcharts-axis-label"><tspan y="6" x="0">12</tspan></text></g><g class="amcharts-value-axis value-axis-a1" transform="translate(71,20)" visibility="visible"><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,312)" class="amcharts-axis-label"><tspan y="6" x="0">200</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,260)" class="amcharts-axis-label"><tspan y="6" x="0">250</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,208)" class="amcharts-axis-label"><tspan y="6" x="0">300</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,156)" class="amcharts-axis-label"><tspan y="6" x="0">350</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,103)" class="amcharts-axis-label"><tspan y="6" x="0">400</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,51)" class="amcharts-axis-label"><tspan y="6" x="0">450</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)" class="amcharts-axis-label"><tspan y="6" x="0">500</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="12px" opacity="1" font-weight="bold" text-anchor="middle" class="amcharts-axis-title" transform="translate(-50,157) rotate(-90)"><tspan y="6" x="0">distance</tspan></text></g><g class="amcharts-value-axis value-axis-a2" transform="translate(71,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a3" transform="translate(71,20)" visibility="visible"><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(473,305.5)" class="amcharts-axis-label"><tspan y="6" x="0">04h 10min</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(473,260.5)" class="amcharts-axis-label"><tspan y="6" x="0">05h 00min</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(473,216.5)" class="amcharts-axis-label"><tspan y="6" x="0">05h 50min</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(473,171.5)" class="amcharts-axis-label"><tspan y="6" x="0">06h 40min</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(473,126.5)" class="amcharts-axis-label"><tspan y="6" x="0">07h 30min</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(473,81.5)" class="amcharts-axis-label"><tspan y="6" x="0">08h 20min</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(473,37.5)" class="amcharts-axis-label"><tspan y="6" x="0">09h 10min</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="12px" opacity="1" font-weight="bold" text-anchor="middle" class="amcharts-axis-title" transform="translate(498,157) rotate(-90)"><tspan y="6" x="0">duration</tspan></text></g></g><g></g><g transform="translate(71,20)"></g><g></g><g></g><clipPath id="AmChartsEl-3"><rect x="-1" y="-1" width="484" height="315" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg><a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: black; font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 76px; top: 25px;">JS chart by amCharts</a></div><div class="amChartsLegend amcharts-legend-div" style="overflow: hidden; position: relative; text-align: left; width: 591px; height: 76px; cursor: default;"><svg version="1.1" style="position: absolute; width: 591px; height: 76px;"><desc>JavaScript chart by amCharts 3.21.0</desc><g transform="translate(71,0)"><path cs="100,100" d="M0.5,0.5 L482.5,0.5 L482.5,65.5 L0.5,65.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-legend-bg"></path><g transform="translate(0,11)"><g cursor="pointer" class="amcharts-legend-item-g1" aria-label="distance" transform="translate(0,0)"><path cs="100,100" d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z" fill="#52BEDB" stroke="#52BEDB" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" transform="translate(16,8)" class="amcharts-graph-column amcharts-graph-g1 amcharts-legend-marker"></path><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-legend-label" transform="translate(37,7)"><tspan y="6" x="0">distance</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-legend-value" transform="translate(88,7)">total: 3,046 mi</text><rect x="32" y="0" width="176.234375" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g><g cursor="pointer" class="amcharts-legend-item-g2" aria-label="latitude/city" transform="translate(218,0)"><g class="amcharts-graph-line amcharts-graph-g2 amcharts-legend-marker"><path cs="100,100" d="M0.5,8.5 L32.5,8.5" fill="none" stroke-width="1" stroke-opacity="0.9" stroke="black" class="amcharts-graph-stroke"></path><circle r="4" cx="0" cy="0" fill="#89C4F4" stroke="#02617A" fill-opacity="1" stroke-width="2" stroke-opacity="1" class="amcharts-graph-bullet" transform="translate(17,8)"></circle></g><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-legend-label" transform="translate(37,7)"><tspan y="6" x="0">latitude/city</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-legend-value" transform="translate(109,7)"> </text><rect x="32" y="0" width="196.703125" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g><g cursor="pointer" class="amcharts-legend-item-g3" aria-label="duration" transform="translate(0,28)"><g class="amcharts-graph-line amcharts-graph-g3 amcharts-legend-marker"><path cs="100,100" d="M0.5,8.5 L32.5,8.5" fill="none" stroke-width="1" stroke-opacity="0.9" stroke="#E26A6A" class="amcharts-graph-stroke"></path><path cs="100,100" d="M-3.5,4.5 L4.5,4.5 L4.5,-3.5 L-3.5,-3.5 Z" fill="#E26A6A" stroke="#E26A6A" fill-opacity="1" stroke-width="1" stroke-opacity="1" class="amcharts-graph-bullet" transform="translate(17,8)"></path></g><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-legend-label" transform="translate(37,7)"><tspan y="6" x="0">duration</tspan></text><text y="6" fill="black" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-legend-value" transform="translate(88,7)"> </text><rect x="32" y="0" width="175.9375" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g></g></g></svg></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="cd-horizontal-timeline loaded">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events" style="width: 1800px;">
                                                <ol>
                                                    <li><a href="#0" data-date="16/01/2014" class="selected" style="left: 120px;">16 Jan</a></li>
                                                    <li><a href="#0" data-date="28/02/2014" style="left: 300px;">28 Feb</a></li>
                                                    <li><a href="#0" data-date="20/04/2014" style="left: 480px;">20 Mar</a></li>
                                                    <li><a href="#0" data-date="20/05/2014" style="left: 600px;">20 May</a></li>
                                                    <li><a href="#0" data-date="09/07/2014" style="left: 780px;">09 Jul</a></li>
                                                    <li><a href="#0" data-date="30/08/2014" style="left: 960px;">30 Aug</a></li>
                                                    <li><a href="#0" data-date="15/09/2014" style="left: 1020px;">15 Sep</a></li>
                                                    <li><a href="#0" data-date="01/11/2014" style="left: 1200px;">01 Nov</a></li>
                                                    <li><a href="#0" data-date="10/12/2014" style="left: 1380px;">10 Dec</a></li>
                                                    <li><a href="#0" data-date="19/01/2015" style="left: 1500px;">29 Jan</a></li>
                                                    <li><a href="#0" data-date="03/03/2015" style="left: 1680px;">3 Mar</a></li>
                                                </ol>
                                                <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.0792925);"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation">
                                            <li><a href="#0" class="prev inactive">Prev</a></li>
                                            <li><a href="#0" class="next">Next</a></li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2014">
                                                <h2>Horizontal Timeline</h2>
                                                <em>January 16th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="28/02/2014">
                                                <h2>Event title here</h2>
                                                <em>February 28th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="20/04/2014">
                                                <h2>Event title here</h2>
                                                <em>March 20th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="20/05/2014">
                                                <h2>Event title here</h2>
                                                <em>May 20th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="09/07/2014">
                                                <h2>Event title here</h2>
                                                <em>July 9th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="30/08/2014">
                                                <h2>Event title here</h2>
                                                <em>August 30th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="15/09/2014">
                                                <h2>Event title here</h2>
                                                <em>September 15th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="01/11/2014">
                                                <h2>Event title here</h2>
                                                <em>November 1st, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="10/12/2014">
                                                <h2>Event title here</h2>
                                                <em>December 10th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="19/01/2015">
                                                <h2>Event title here</h2>
                                                <em>January 19th, 2015</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="03/03/2015">
                                                <h2>Event title here</h2>
                                                <em>March 3rd, 2015</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at,
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-border-primary">
                                    <div class="card-header">
                                        <h5>John Doe </h5>
                                        <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                                        <div class="dropdown-secondary dropdown f-right">
                                            <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdown6" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                            </div>
                                            <!-- end of dropdown menu -->
                                            <span class="f-left m-r-5 text-inverse">Status : </span>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="list list-unstyled">
                                                    <li>Invoice #: &nbsp;0028</li>
                                                    <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list list-unstyled text-right">
                                                    <li>$8,750</li>
                                                    <li>Method: <span class="text-semibold">Paypal</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="task-list-table">
                                            <p class="task-due"><strong> Due : </strong><strong class="label label-success">23 hours</strong></p>
                                        </div>
                                        <div class="task-board m-0">
                                            <a href="../html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                            <!-- end of dropdown-secondary -->
                                            <div class="dropdown-secondary dropdown">
                                                <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                                </div>
                                                <!-- end of dropdown menu -->
                                            </div>
                                            <!-- end of seconadary -->
                                        </div>
                                        <!-- end of pull-right class -->
                                    </div>
                                    <!-- end of card-footer -->
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- Invoice list card start -->
                                <div class="card card-border-primary">
                                    <div class="card-header">
                                        <h5>John Doe </h5>
                                        <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                                        <div class="dropdown-secondary dropdown f-right">
                                            <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdown12" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                            </div>
                                            <!-- end of dropdown menu -->
                                            <span class="f-left m-r-5 text-inverse">Status : </span>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="list list-unstyled">
                                                    <li>Invoice #: &nbsp;0028</li>
                                                    <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list list-unstyled text-right">
                                                    <li>$8,750</li>
                                                    <li>Method: <span class="text-semibold">Paypal</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="task-list-table">
                                            <p class="task-due"><strong> Due : </strong><strong class="label label-warning">23 hours</strong></p>
                                        </div>
                                        <div class="task-board m-0">
                                            <a href="../html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                            <!-- end of dropdown-secondary -->
                                            <div class="dropdown-secondary dropdown">
                                                <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown8" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                                </div>
                                                <!-- end of dropdown menu -->
                                            </div>
                                            <!-- end of seconadary -->
                                        </div>
                                        <!-- end of pull-right class -->
                                    </div>
                                    <!-- end of card-footer -->
                                </div>
                                <!-- Invoice list card end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-primary btn-sm">Week</button>
                                <button class="btn btn-primary btn-sm">Month</button>
                                <button class="btn btn-primary btn-sm">Year</button>
                            </div>
                            <div class="card-block">
                                <div id="morris-extra-area" style="position: relative;"><svg height="400" version="1.1" width="810.938" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.265625px; top: -0.390625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84375" y="361" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#5fbeaa" d="M45.34375,361H785.938" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="277" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#5fbeaa" d="M45.34375,277H785.938" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="193" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#5fbeaa" d="M45.34375,193H785.938" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="109" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#5fbeaa" d="M45.34375,109H785.938" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#5fbeaa" d="M45.34375,25H785.938" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="785.938" y="373.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="662.5619610908261" y="373.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="539.1859221816521" y="373.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="415.8098832724783" y="373.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="292.09582781834774" y="373.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="168.71978890917387" y="373.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="45.34375" y="373.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><path fill="#fad0c3" stroke="none" d="M45.34375,361C76.18775972729347,340,137.8757791818804,281.2,168.71978890917387,277C199.56379863646734,272.8,261.25181809105425,329.4971272229822,292.09582781834774,327.4C323.0243416818804,325.29712722298217,384.88136940894566,262.30287277701774,415.8098832724783,260.2C446.65389299977176,258.10287277701775,508.3419124543587,303.25,539.1859221816521,310.6C570.0299319089456,317.95000000000005,631.7179513635326,314.8,662.5619610908261,319C693.4059708181196,323.2,755.0939902727065,337.9,785.938,344.2L785.938,361L45.34375,361Z" fill-opacity="0.8" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.8;"></path><path fill="none" stroke="#fb9678" d="M45.34375,361C76.18775972729347,340,137.8757791818804,281.2,168.71978890917387,277C199.56379863646734,272.8,261.25181809105425,329.4971272229822,292.09582781834774,327.4C323.0243416818804,325.29712722298217,384.88136940894566,262.30287277701774,415.8098832724783,260.2C446.65389299977176,258.10287277701775,508.3419124543587,303.25,539.1859221816521,310.6C570.0299319089456,317.95000000000005,631.7179513635326,314.8,662.5619610908261,319C693.4059708181196,323.2,755.0939902727065,337.9,785.938,344.2" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="361" r="0" fill="#fb9678" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="168.71978890917387" cy="277" r="0" fill="#fb9678" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="292.09582781834774" cy="327.4" r="0" fill="#fb9678" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="415.8098832724783" cy="260.2" r="0" fill="#fb9678" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="539.1859221816521" cy="310.6" r="0" fill="#fb9678" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="662.5619610908261" cy="319" r="0" fill="#fb9678" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="785.938" cy="344.2" r="0" fill="#fb9678" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#afb1db" stroke="none" d="M45.34375,361C76.18775972729347,354.7,137.8757791818804,346.3,168.71978890917387,335.8C199.56379863646734,325.3,261.25181809105425,276.3708618331053,292.09582781834774,277C323.0243416818804,277.6308618331053,384.88136940894566,334.5313816689466,415.8098832724783,340.84C446.65389299977176,347.13138166894663,508.3419124543587,341.67999999999995,539.1859221816521,327.4C570.0299319089456,313.11999999999995,631.7179513635326,224.5,662.5619610908261,226.6C693.4059708181196,228.7,755.0939902727065,314.8,785.938,344.2L785.938,361L45.34375,361Z" fill-opacity="0.8" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.8;"></path><path fill="none" stroke="#7e81cb" d="M45.34375,361C76.18775972729347,354.7,137.8757791818804,346.3,168.71978890917387,335.8C199.56379863646734,325.3,261.25181809105425,276.3708618331053,292.09582781834774,277C323.0243416818804,277.6308618331053,384.88136940894566,334.5313816689466,415.8098832724783,340.84C446.65389299977176,347.13138166894663,508.3419124543587,341.67999999999995,539.1859221816521,327.4C570.0299319089456,313.11999999999995,631.7179513635326,224.5,662.5619610908261,226.6C693.4059708181196,228.7,755.0939902727065,314.8,785.938,344.2" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="361" r="0" fill="#7e81cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="168.71978890917387" cy="335.8" r="0" fill="#7e81cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="292.09582781834774" cy="277" r="0" fill="#7e81cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="415.8098832724783" cy="340.84" r="0" fill="#7e81cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="539.1859221816521" cy="327.4" r="0" fill="#7e81cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="662.5619610908261" cy="226.6" r="0" fill="#7e81cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="785.938" cy="344.2" r="0" fill="#7e81cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#0ddbe4" stroke="none" d="M45.34375,361C76.18775972729347,358.9,137.8757791818804,361,168.71978890917387,352.6C199.56379863646734,338.95000000000005,261.25181809105425,252.21942544459645,292.09582781834774,251.8C323.0243416818804,251.37942544459645,384.88136940894566,360.8058002735978,415.8098832724783,349.24C446.65389299977176,337.70580027359784,508.3419124543587,166.33,539.1859221816521,159.4C570.0299319089456,152.47,631.7179513635326,270.7,662.5619610908261,293.8C693.4059708181196,316.9,755.0939902727065,331.6,785.938,344.2L785.938,361L45.34375,361Z" fill-opacity="0.8" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.8;"></path><path fill="none" stroke="#01c0c8" d="M45.34375,361C76.18775972729347,358.9,137.8757791818804,361,168.71978890917387,352.6C199.56379863646734,338.95000000000005,261.25181809105425,252.21942544459645,292.09582781834774,251.8C323.0243416818804,251.37942544459645,384.88136940894566,360.8058002735978,415.8098832724783,349.24C446.65389299977176,337.70580027359784,508.3419124543587,166.33,539.1859221816521,159.4C570.0299319089456,152.47,631.7179513635326,270.7,662.5619610908261,293.8C693.4059708181196,316.9,755.0939902727065,331.6,785.938,344.2" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="361" r="0" fill="#01c0c8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="168.71978890917387" cy="352.6" r="0" fill="#01c0c8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="292.09582781834774" cy="251.8" r="0" fill="#01c0c8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="415.8098832724783" cy="349.24" r="0" fill="#01c0c8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="539.1859221816521" cy="159.4" r="0" fill="#01c0c8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="662.5619610908261" cy="293.8" r="0" fill="#01c0c8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="785.938" cy="344.2" r="0" fill="#01c0c8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card table-1-card">
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-capitalize">
                                                        <th>Type</th>
                                                        <th>Lead Name</th>
                                                        <th>Views</th>
                                                        <th>Favourites</th>
                                                        <th>Last Visit</th>
                                                        <th>Last Action</th>
                                                        <th>Last Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#!">Buyer</a>
                                                        </td>
                                                        <td>Denish Ann</td>
                                                        <td>153</td>
                                                        <td>100</td>
                                                        <td>20</td>
                                                        <td>9.23 A.M.</td>
                                                        <td>9/27/2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="text-danger" href="#!">Lanload</a>
                                                        </td>
                                                        <td>John Doe</td>
                                                        <td>121</td>
                                                        <td>100</td>
                                                        <td>20</td>
                                                        <td>6.23 A.M.</td>
                                                        <td>8/27/2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#!">Buyer</a>
                                                        </td>
                                                        <td>Henry Joe</td>
                                                        <td>154</td>
                                                        <td>140</td>
                                                        <td>30</td>
                                                        <td>7.54 P.M.</td>
                                                        <td>4/30/2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="text-danger" href="#!">Lanload</a>
                                                        </td>
                                                        <td>Sara Soudein</td>
                                                        <td>153</td>
                                                        <td>100</td>
                                                        <td>20</td>
                                                        <td>9.23 A.M.</td>
                                                        <td>5/20/2016</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#!">Buyer</a>
                                                        </td>
                                                        <td>Denish Ann</td>
                                                        <td>153</td>
                                                        <td>100</td>
                                                        <td>20</td>
                                                        <td>9.23 A.M.</td>
                                                        <td>3/26/2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="text-info" href="#!">Lanload</a>
                                                        </td>
                                                        <td>Stefen Joe</td>
                                                        <td>153</td>
                                                        <td>100</td>
                                                        <td>20</td>
                                                        <td>11.45 A.M.</td>
                                                        <td>5/20/2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#!">Buyer</a>
                                                        </td>
                                                        <td>Mark Backlus</td>
                                                        <td>153</td>
                                                        <td>100</td>
                                                        <td>20</td>
                                                        <td>12.40 A.M.</td>
                                                        <td>3/27/2017</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card table-card group-widget">
                                    <div class="">
                                        <div class="row-table">
                                            <div class="col-sm-4 bg-primary card-block-big">
                                                <i class="icofont icofont-music"></i>
                                                <p>1,586</p>
                                            </div>
                                            <div class="col-sm-4 bg-dark-primary card-block-big">
                                                <i class="icofont icofont-video-clapper"></i>
                                                <p>1,743</p>
                                            </div>
                                            <div class="col-sm-4 bg-darkest-primary card-block-big">
                                                <i class="icofont icofont-email"></i>
                                                <p>1,096</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card widget-chat-box">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="icofont icofont-navigation-menu pop-up"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>
                                   John Henry
                                        </h5>
                                    </div>
                                    <div class="col-sm-2 text-right">
                                        <i class="icofont icofont-ui-edit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-block">
                                <p class="text-center">12:05 A.M.</p>
                                <div class="media">
                                    <img class="d-flex mr-3 img-circle img-40 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                                    <div class="media-body send-chat">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="media col-sm-8 offset-md-4">
                                    <div class="media-body  receive-chat">
                                        Cras sit amet nibh libero, in gravida nulla.vel metus scelerisque ante
                                        <span class="time">
                                        <i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago
                                        </span>
                                    </div>
                                </div>
                                <div class="media">
                                    <img class="d-flex mr-3 img-circle img-40 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                                    <div class="media-body send-chat">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="media col-sm-8 offset-md-4">
                                    <div class="media-body  receive-chat">
                                        Cras sit amet nibh libero, in gravida nulla.Vel metus scelerisque ante
                                        <span class="time">
                                        <i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="text" class="form-control" placeholder="Your Message">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-facebook">
                                <h3>1165 +</h3>
                                <span class="m-t-10">Facebook Users</span>
                                <i class="icofont icofont-social-facebook"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-twitter">
                                <h3>780 +</h3>
                                <span class="m-t-10">Twitter Users</span>
                                <i class="icofont icofont-social-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-linkein">
                                <h3>998 +</h3>
                                <span class="m-t-10">Linked In Users</span>
                                <i class="icofont icofont-brand-linkedin"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-google-plus">
                                <h3>650 +</h3>
                                <span class="m-t-10">Google Plus Users</span>
                                <i class="icofont icofont-social-google-plus"></i>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
    </div>
</div>
@endsection
