<div class="row">
    <div class="modify-search modify-cruise">
        <div class="container">
            <form wire:submit.prevent="applyFilter">
                <div class="col-md-3 col-sm-6">
                    <div class="form-gp">
                        <label>Starting From</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" wire:model="departure_city" name="departure_city" class="form-control" required placeholder="E.g. London" id="departure_city">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-gp">
                        <label>Going To</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" wire:model="destination_city" name="destination_city" class="form-control" placeholder="E.g. Paris" id="destination_city">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="form-gp">
                        <label>Month Of Travel</label>
                        <select class="custom-select-room" wire:model="startDate">
                            <option value="">Any</option>
                            @foreach ($uniqueStartDate as $startDate)
                                @foreach (collect(explode(', ', $startDate))->map(function($start_month) {
                                    return \Carbon\Carbon::parse($start_month)->format('F');
                                })->unique()->sort() as $month)
                                    <option value="{{ $startDate }}">{{ $month }}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 col-xs-3">
                    <div class="form-gp">
                        <label>Budget</label>
                        <select class="custom-select-room" wire:model="budgetPrice">
                            <option value="">All</option>
                            @foreach ($uniquePrice as $price)
                                <option value="{{ $price }}">$ {{ $price }}</option>
                            @endforeach
                            {{-- <option>Upto $500</option>
                            <option>Above $1000+</option>
                            <option>Upto $5000</option> --}}
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
                    {{-- <div id="price-range"></div> --}}
                    <div wire:ignore>
                        <div id="price-range"></div>
                        <button id="update-search-price-btn" wire:click="updateSearchPrice($event.target.value)" style="display: none;"></button>
                    </div>
                </div>
                <div class="star-filter filter">
                    <h5><i class="fa fa-calendar"></i> Duration of the cruise</h5>
                    <ul>
                        @foreach ($uniqueDuration as $duration)
                            <li>
                                <input type="checkbox" wire:model.live="filterDuration.{{ $duration }}" value="{{ $duration }}">
                                {{ $duration }} Days
                            </li>
                        @endforeach
                        {{-- <li><input type="checkbox"> Upto 3 Days</li>
                        <li><input type="checkbox"> 5 to 7 Days</li>
                        <li><input type="checkbox"> 9 to 11 Days</li>
                        <li><input type="checkbox"> 12 to 14 Days</li>
                        <li><input type="checkbox"> Above 14 Days</li>
                        <li><input type="checkbox"> Any</li> --}}
                    </ul>
                </div>
                <div class="facilities-filter filter">
                    <h5><i class="fa fa-list"></i>   Cabin Type</h5>
                    <ul>
                        @foreach ($uniqueCabinType as $cabinType)
                            <li>
                                <input type="checkbox" wire:model.live="filterCabinType.{{ $cabinType }}" value="{{ $cabinType }}">
                                {{ $cabinType }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="facilities-filter filter">
                    <h5><i class="fa fa-list"></i>   Departure Port</h5>
                    <ul>
                        @foreach ($uniqueDeparture as $departure)
                            @php
                                $parts = explode(",", $departure);
                                $city = $parts[0];
                            @endphp
                            <li>
                                <input type="checkbox" wire:model.live="filterDeparture.{{ $departure }}" value="{{ $city }}">
                                {{ $city }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="facilities-filter filter">
                    <h5><i class="fa fa-list"></i>Destination Ports</h5>
                    <ul>
                        @foreach ($uniqueDestination as $destination)
                            @php
                                $parts = explode(",", $destination);
                                $city = $parts[0];
                            @endphp
                            <li>
                                <input type="checkbox" wire:model.live="filterDestination.{{ $destination }}" value="{{ $city }}">
                                {{ $city }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="facilities-filter filter">
                    <h5><i class="fa fa-list"></i> Return Port
                    </h5>
                    <ul>
                        @foreach ($uniqueReturn as $return)
                            @php
                                $parts = explode(",", $return);
                                $city = $parts[0];
                            @endphp
                            <li>
                                <input type="checkbox" wire:model.live="filterReturn.{{ $return }}" value="{{ $city }}">
                                {{ $city }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="facilities-filter filter">
                    <h5><i class="fa fa-list"></i> Amenities and Features</h5>
                    <ul>
                        @foreach ($uniqueAmenities as $amenity)
                            <li>
                                <input type="checkbox" wire:model.live="filterAmenities.{{ $amenity->name }}" value="{{ $amenity->name }}"><img src="{{ asset('public/storage/' . $amenity->icon) }}" alt="hotel" width="18px" style="filter: invert(1);"> &nbsp;
                                {{ $amenity->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: FILTER AREA -->
        <div class="col-md-9 hotel-listing">
            <!-- START: SORT AREA -->
            <div class="sort-area col-sm-10">
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="custom-select-button" wire:change="updateSortPrice($event.target.value)">
                        <option value="">Price</option>
                        <option value="lowest_price">Low to High</option>
                        <option value="highest_price">High to Low</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="custom-select-button" wire:change="updateSortPrice($event.target.value)">
                        <option value="">Star Rating</option>
                        <option value="lowest_rating"> Low to High</option>
                        <option value="highest_rating"> High to Low</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="custom-select-button" wire:change="updateSortPrice($event.target.value)">
                        <option value="">User Rating</option>
                        <option value="lowest_user_rating"> Low to High</option>
                        <option value="highest_user_rating"> High to Low</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 sort">
                    <select class="custom-select-button" wire:change="updateSortPrice($event.target.value)">
                        <option value="">Name</option>
                        <option value="ascending"> Ascending</option>
                        <option value="descending"> Descending</option>
                    </select>
                </div>
            </div>
            <!-- END: SORT AREA -->
            <div class="clearfix visible-xs-block"></div>
            <div class="clearfix"></div>
            <!-- START: HOTEL LIST VIEW -->
            @if(count($cruises) > 0)
                @foreach ($cruises as $cruise)
                    <div class="col-md-12 col-sm-12 h001">
                        <div class="cruise-list-view h002">
                            <div class="col-md-4 col-sm-6 clear-padding">
                                @if($cruise->images)
                                    @php
                                        $images = json_decode($cruise->images);
                                    @endphp

                                    @if($images && count($images) > 0)
                                    <a href="{{ route('frontend.cruises.show',$cruise->slug) }}">
                                        <img src="{{ asset('public/storage/' . $images[0]) }}" alt="cruise">
                                    </a>
                                    @endif
                                @endif
                                {{-- <img src="{{ asset('public/storage/') . '/' . $cruise->image }}" alt="cruise"> --}}
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <a href="{{ route('frontend.cruises.show',$cruise->slug) }}">
                                    <h4>{{ $cruise->title }}</h4>
                                </a>
                                <p>
                                    <strong><i class="fa fa-map-marker"></i> Departs From: </strong>
                                    {{ $cruise->departure }}
                                </p>
                                <p>
                                    <strong><i class="fa fa-globe"></i> Destination : </strong>
                                    {{ $cruise->destination }}
                                </p>
                                <p>
                                    <strong><i class="fa fa-map-marker"></i> Return Port : </strong>
                                    {{ $cruise->return }}
                                </p>
                                <p>
                                    <strong><i class="fa fa-list"></i> Amenities:  </strong>
                                    @if($cruise->amenities)
                                        @foreach (json_decode($cruise->amenities) as $amenityName)
                                            @php
                                                $amenityDetails = $uniqueAmenities[$amenityName];
                                            @endphp

                                            <img src="{{ asset('public/storage/' . $amenityDetails->icon) }}" alt="hotel" width="50px" style="min-height: 50px !important;">{{ $amenityDetails->name }}
                                        @endforeach
                                    @endif
                                    {{-- {{ $cruise->included }} --}}
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
                            <div class="col-md-2 booking-box clear-padding text-center h003">
                                {{-- <div class="rating-box">
                                    @for ($i = 1; $i < 5; $i++)
                                        @if($i <= $cruise->rating)
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                    <h5>Based On 128 Reviews</h5>
                                </div> --}}
                                <div class="price">
                                    <h3>${{ $cruise->price }}</h3>
                                    {{-- <h5>$73/night</h5> --}}
                                    <a href="{{ route('frontend.cruises.show',$cruise->slug) }}">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4 class="text-center" style="margin-top: 100px">No data available</h4>
            @endif
            <div class="clearfix"></div>
            <!-- END: CRUISE LIST VIEW -->

            <!-- START: PAGINATION -->
            <div class="bottom-pagination">
                {{ $cruises->links('livewire.pagination-livewire') }}
            </div>
            <!-- END: PAGINATION -->
        </div>
        <!-- END: INDIVIDUAL LISTING AREA -->
    </div>
</div>
