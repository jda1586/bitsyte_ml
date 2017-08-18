@extends('layouts.userlayout')


@section('userContent')
                


    <div class="app-content container center-layout mt-2">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Analytics spakline & chartjs  -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Visitors Overview</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div class="row my-1">
                        <div class="col-lg-4 col-xs-12">
                            <div class="text-xs-center">
                                <h3>23,454</h3>
                                <p class="text-muted">Page Views <span class="success"><i class="ft-arrow-up"></i> 8.16%</span></p>
                                <div id="sp-tristate-bar-total-revenue"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12">
                            <div class="text-xs-center">
                                <h3>6,630</h3>
                                <p class="text-muted">Unique Visitor <span class="danger"><i class="ft-arrow-down"></i> 2.30%</span></p>
                                <div id="sp-stacked-bar-total-sales"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12">
                            <div class="text-xs-center">
                                <h3>86,578</h3>
                                <p class="text-muted">Total Visits <span class="warning"><i class="ft-arrow-up"></i> 4.27%</span></p>
                                <div id="sp-bar-total-cost"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="chartjs">
                                <canvas id="line-stacked-area" height="300"></canvas>
                            </div>
                            <ul class="list-inline text-xs-center mt-1">
                                <li class="mr-1">
                                    <h6><i class="fa fa-circle success"></i> <span>Page Views</span></h6>
                                </li>
                                <li class="mr-1">
                                    <h6><i class="fa fa-circle warning"></i> <span>Total Visits</span></h6>
                                </li>
                                <li class="mr-1">
                                    <h6><i class="fa fa-circle danger"></i> <span>Unique Visitor</span></h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Analytics spakline & chartjs  -->

<!--stats-->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="primary">78%</h3>
                            <span>New Session</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-user-follow primary font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                    <progress class="progress progress-sm progress-primary mt-1 mb-0" value="80" max="100"></progress>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="danger">423</h3>
                            <span>Total Visits</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-social-dropbox danger font-large-2 float-xs-right"></i>
                        </div>
                        <progress class="progress progress-sm progress-danger mt-1 mb-0" value="40" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="success">64.89 %</h3>
                            <span>Bounce Rate</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-layers success font-large-2 float-xs-right"></i>
                        </div>
                        <progress class="progress progress-sm progress-success mt-1 mb-0" value="60" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="warning">02.12</h3>
                            <span>Session Duration</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-globe warning font-large-2 float-xs-right"></i>
                        </div>
                        <progress class="progress progress-sm progress-warning mt-1 mb-0" value="35" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/stats-->

<!-- Audience by country & users visit-->
<div class="row match-height">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border">
                <h4 class="card-title">Avg. Session Duration & Pages/Session</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div id="area-chart" class="height-250"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border">
                <h4 class="card-title">Goals Complition</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="goal-list-scroll" class="table-responsive height-250 position-relative">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Goals</th>
                                <th>Goal Value</th>
                                <th>Conversion rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Account</td>
                                <td>$0.18</td>
                                <td class="text-xs-center font-small-2">85% <progress class="progress progress-sm progress-success mb-0" value="95" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td>Subscribe</td>
                                <td>$0.12</td>
                                <td class="text-xs-center font-small-2">75% <progress class="progress progress-sm progress-success mb-0" value="85" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>$220</td>
                                <td class="text-xs-center font-small-2">65% <progress class="progress progress-sm progress-warning mb-0" value="65" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td>Laptop</td>
                                <td>$880</td>
                                <td class="text-xs-center font-small-2">35% <progress class="progress progress-sm progress-warning mb-0" value="45" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td>LED TV</td>
                                <td>$1002</td>
                                <td class="text-xs-center font-small-2">25% <progress class="progress progress-sm progress-warning mb-0" value="30" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td>AC</td>
                                <td>$1200</td>
                                <td class="text-xs-center font-small-2">15% <progress class="progress progress-sm progress-success mb-0" value="15" max="100"></progress></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Audience by country  & users visit -->

<!-- Analytics map based session -->
<div class="row">
    <div class="col-xs-12">
        <div class="card box-shadow-0">
            <div class="card-body collapse in">
                <div class="row">
                    <div class="col-xl-9 col-lg-12">
                        <div id="world-map-markers" class="height-450"></div>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="card-block">
                            <h4 class="card-title mb-0">Visitors Sessions</h4>
                            <div class="row">
                                <div class="col-xl-12 col-lg-6 col-sm-12">
                                    <p class="pb-1">Sessions by Browser</p>
                                    <div id="sessions-browser-donut-chart" class="height-200"></div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-sm-12">
                                    <div class="sales pr-2 pt-2">
                                        <div class="sales-today mb-2">
                                            <p class="m-0">Today's <span class="primary float-xs-right"><i class="ft-arrow-up primary"></i> 6.89%</span></p>
                                            <progress class="progress progress-sm progress-primary mb-0" value="70" max="100"></progress>
                                        </div>
                                        <div class="sales-yesterday">
                                            <p class="m-0">Yesterday's <span class="danger float-xs-right"><i class="ft-arrow-down danger"></i> 4.18%</span></p>
                                            <progress class="progress progress-sm progress-danger mb-0" value="60" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Analytics map based session -->

<!-- Bounce Rate & List -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block sales-growth-chart">
                    <div class="chart-title">
                        <h1 class="display-4">32%</h1>
                        <span class="text-muted">Bounce Rate</span>
                    </div>
                    <div id="bounce-rate" class="height-250"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header no-border">
                <h4 class="card-title">Audience by Country</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="audience-list-scroll" class="table-responsive height-300 position-relative">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Page views</th>
                                <th>Device</th>
                                <th>% Bounce rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="flag-icon flag-icon-gb"></i> United State</td>
                                <td>18</td>
                                <td>Desktop</td>
                                <td class="text-xs-center font-small-2">85% <progress class="progress progress-sm progress-success mb-0" value="85" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-au"></i> Australia</td>
                                <td>12</td>
                                <td>Mobile</td>
                                <td class="text-xs-center font-small-2">75% <progress class="progress progress-sm progress-success mb-0" value="75" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-br"></i> Brazil</td>
                                <td>25</td>
                                <td>Tablet</td>
                                <td class="text-xs-center font-small-2">66% <progress class="progress progress-sm progress-success mb-0" value="66" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-gb"></i> Great Britain (UK)</td>
                                <td>8</td>
                                <td>Mobile</td>
                                <td class="text-xs-center font-small-2">58% <progress class="progress progress-sm progress-warning mb-0" value="58" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-hk"></i> Hong Kong</td>
                                <td>18</td>
                                <td>Desktop</td>
                                <td class="text-xs-center font-small-2">45% <progress class="progress progress-sm progress-warning mb-0" value="45" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-in"></i> India</td>
                                <td>10</td>
                                <td>Desktop</td>
                                <td class="text-xs-center font-small-2">38% <progress class="progress progress-sm progress-warning mb-0" value="38" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-jp"></i> Japan</td>
                                <td>11</td>
                                <td>Moblie</td>
                                <td class="text-xs-center font-small-2">25% <progress class="progress progress-sm progress-danger mb-0" value="25" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-mx"></i> Mexico</td>
                                <td>15</td>
                                <td>Tablet</td>
                                <td class="text-xs-center font-small-2">22% <progress class="progress progress-sm progress-danger mb-0" value="22" max="100"></progress></td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-ma"></i> Morocco</td>
                                <td>14</td>
                                <td>Moblie</td>
                                <td class="text-xs-center font-small-2">18% <progress class="progress progress-sm progress-danger mb-0" value="18" max="100"></progress></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Bounce Rate & List -->
        </div>
      </div>
    </div>



                @endsection