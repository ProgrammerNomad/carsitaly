@extends('frontend.layouts.services-app')

@section('title') {{ __($module_title) }} @endsection

@section('services-content')
<div class="site-wrapper">
    <livewire:filter-cruises-index />
    {{-- <div class="row">
        <div class="modify-search modify-cruise">
            <div class="container">
                <form >
                    <div class="col-md-3 col-sm-6">
                        <div class="form-gp">
                            <label>Starting From</label>
                            <div class="input-group margin-bottom-sm">
                                <input type="text" name="departure_city" class="form-control" required placeholder="E.g. London">
                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-gp">
                            <label>Going To</label>
                            <div class="input-group margin-bottom-sm">
                                <input type="text" name="destination_city" class="form-control" required placeholder="E.g. Paris">
                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="form-gp">
                            <label>Month Of Travel</label>

                            <select class="selectpicker">
                                <option>Any</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="form-gp">
                            <label>Budget</label>
                            <select class="selectpicker">
                                <option>All</option>
                                <option>Upto $500</option>
                                <option>Above $1000+</option>
                                <option>Upto $5000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-9">
                        <div class="form-gp">
                            <button type="submit" class="modify-search-button btn transition-effect text-center">MODIFY SEARCH</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <!-- START: FILTER AREA -->
            <div class="col-md-3 clear-padding">
                <div class="filter-head text-center">
                    <h4>{{ $cruises->count() }} Result Found Matching Your Search.</h4>
                </div>
                <div class="filter-area">
                    <div class="price-filter filter">
                        <h5><i class="fa fa-usd"></i> Price</h5>
                        <p>
                            <label></label>
                            <input type="text" id="amount" readonly>
                        </p>
                        <div id="price-range"></div>
                    </div>
                    <div class="star-filter filter">
                        <h5><i class="fa fa-calendar"></i> Cruise Length</h5>
                        <ul>
                            <li><input type="checkbox"> Upto 3 Days</li>
                            <li><input type="checkbox"> 5 to 7 Days</li>
                            <li><input type="checkbox"> 9 to 11 Days</li>
                            <li><input type="checkbox"> 12 to 14 Days</li>
                            <li><input type="checkbox"> Above 14 Days</li>
                            <li><input type="checkbox"> Any</li>
                        </ul>
                    </div>
                    <div class="location-filter filter">
                        <h5><i class="fa fa-globe"></i> Location</h5>
                        <ul>
                            <li><input type="checkbox"> Africa</li>
                            <li><input type="checkbox"> Europe - British Isles</li>
                            <li><input type="checkbox"> Europe - Nothern Europe</li>
                            <li><input type="checkbox"> Hawaii</li>
                            <li><input type="checkbox"> Mexico</li>
                            <li><input type="checkbox"> All</li>
                        </ul>
                    </div>
                    <div class="filter">
                        <h5><i class="fa fa-anchor"></i> Departure Port</h5>
                        <ul>
                            <li><input type="checkbox"> Boston</li>
                            <li><input type="checkbox"> Charleston</li>
                            <li><input type="checkbox"> Fairbanks</li>
                            <li><input type="checkbox"> Houston</li>
                            <li><input type="checkbox"> Goa</li>
                            <li><input type="checkbox"> Kerla</li>
                            <li><input type="checkbox"> All</li>
                        </ul>
                    </div>
                    <div class="facilities-filter filter">
                        <h5><i class="fa fa-list"></i> Inclusion</h5>
                        <ul>
                            <li><input type="checkbox"> <i class="fa fa-ship"></i> Cruise</li>
                            <li><input type="checkbox"> <i class="fa fa-taxi"></i> Transportation</li>
                            <li><input type="checkbox"> <i class="fa fa-eye"></i> Sightseeing</li>
                            <li><input type="checkbox"> <i class="fa fa-cutlery"></i> Meals</li>
                            <li><input type="checkbox"> <i class="fa fa-glass"></i> Drinks</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: FILTER AREA -->
            <div class="col-md-9 hotel-listing">
                <!-- START: SORT AREA -->
                <div class="sort-area col-sm-10">
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>Price</option>
                            <option> Low to High</option>
                            <option> High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>Star Rating</option>
                            <option> Low to High</option>
                            <option> High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>User Rating</option>
                            <option> Low to High</option>
                            <option> High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select class="selectpicker">
                            <option>Name</option>
                            <option> Ascending</option>
                            <option> Descending</option>
                        </select>
                    </div>
                </div>
                <!-- END: SORT AREA -->
                <div class="clearfix visible-xs-block"></div>
                <div class="clearfix"></div>
                <!-- START: HOTEL LIST VIEW -->
                @foreach ($cruises as $cruise)
                    <div class="col-md-12 col-sm-12">
                        <div class="cruise-list-view">
                            <div class="col-md-4 col-sm-6 clear-padding">
                                <img src="{{ asset('public/storage/') . '/' . $cruise->image }}" alt="cruise">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h4>{{ $cruise->title }}</h4>
                                <p>
                                    <strong><i class="fa fa-map-marker"></i> Departs From: </strong>
                                    {{ $cruise->city }}
                                </p>
                                <p>
                                    <strong><i class="fa fa-globe"></i> Itinerary: </strong>
                                    {{ $cruise->country }}
                                </p>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#dateNow">
                                            <i class="fa fa-calendar"></i>
                                            @php
                                                $years = array_unique(array_map(function($date) {
                                                    return \Carbon\Carbon::parse($date)->format('Y');
                                                }, explode(', ', $cruise->start_date)));
                                            @endphp
                                            {{ implode(', ', $years) }}
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#dateNext">
                                            <i class="fa fa-calendar"></i>
                                            @php
                                                $years = array_unique(array_map(function($date) {
                                                    return \Carbon\Carbon::parse($date)->format('Y');
                                                }, explode(', ', $cruise->end_date)));
                                            @endphp
                                            {{ implode(', ', $years) }}
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="dateNow" class="tab-pane fade in active">
                                        <table class="table">
                                            @foreach (collect(explode(', ', $cruise->start_date))->map(function($start_date) {
                                                return \Carbon\Carbon::parse($start_date)->format('M');
                                            })->unique() as $month)
                                                <tr>
                                                    <td>{{ $month }}</td>
                                                    @foreach (collect(explode(', ', $cruise->start_date))->filter(function($date) use ($month) {
                                                        return \Carbon\Carbon::parse($date)->format('M') === $month;
                                                    })->map(function($date) {
                                                        return \Carbon\Carbon::parse($date)->format('d');
                                                    })->unique() as $date)
                                                        <td>{{ $date }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div id="dateNext" class="tab-pane fade">
                                        <table class="table">
                                            @foreach (collect(explode(', ', $cruise->end_date))->map(function($start_date) {
                                                return \Carbon\Carbon::parse($start_date)->format('M');
                                            })->unique() as $month)
                                                <tr>
                                                    <td>{{ $month }}</td>
                                                    @foreach (collect(explode(', ', $cruise->start_date))->filter(function($date) use ($month) {
                                                        return \Carbon\Carbon::parse($date)->format('M') === $month;
                                                    })->map(function($date) {
                                                        return \Carbon\Carbon::parse($date)->format('d');
                                                    })->unique() as $date)
                                                        <td>{{ $date }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix-sm"></div>
                            <div class="col-md-2 booking-box clear-padding text-center">
                                <div class="rating-box">
                                    @for ($i = 1; $i < 5; $i++)
                                        @if($i <= $cruise->rating)
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                    <h5>Based On 128 Reviews</h5>
                                </div>
                                <div class="price">
                                    <h3>${{ $cruise->price }}</h3>
                                    <h5>$73/night</h5>
                                    <a href="{{ route('frontend.cruises.show',$cruise->slug) }}">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
                <!-- END: CRUISE LIST VIEW -->

                <!-- START: PAGINATION -->
                <div class="bottom-pagination">
                    <nav class="pull-right">
                        <ul class="pagination pagination-lg">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">6 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">&#187;</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- END: PAGINATION -->
            </div>
            <!-- END: INDIVIDUAL LISTING AREA -->
        </div>
    </div> --}}
</div>
@endsection
