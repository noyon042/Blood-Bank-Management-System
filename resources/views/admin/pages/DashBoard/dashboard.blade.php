@extends('admin.master')

@section('content')


<h1>Noyon</h1>

<div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile d-flex  flex-row justify-content-between  align-items-center  ">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff0000" d="M192 512C86 512 0 426 0 320C0 228.8 130.2 57.7 166.6 11.7C172.6 4.2 181.5 0 191.1 0h1.8c9.6 0 18.5 4.2 24.5 11.7C253.8 57.7 384 228.8 384 320c0 106-86 192-192 192zM96 336c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 61.9 50.1 112 112 112c8.8 0 16-7.2 16-16s-7.2-16-16-16c-44.2 0-80-35.8-80-80z"/></svg>
                            </div>
                          {{-- <div class="chart sparkline" id="spark1"></div> --}}
                          <div class="data-info">
                            <div class="desc text-dark"><h4 class="card-title">Blood Group</h4> </div>
                            {{-- <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="{{ $countBloodGroup->count() }}"></span>
                            </div> --}}
                            <div class="value text-dark "></span><span class="number" data-toggle="counter" data-end="{{ $countBloodGroup->count() }}"></span></div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile d-flex  flex-row justify-content-between  align-items-center bg-dark ">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zm136 16a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm224 0c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16s7.2 16 16 16H496c8.8 0 16-7.2 16-16z"/></svg>
                    </div>
                          <div class="data-info">
                            <div class="desc text-white "><h4 class="card-title">Donor Info</h4></div>
                            <div class="value text-white "><span class="number" data-toggle="counter" data-end="{{ $countDonar->count() }}" data-suffix=""></span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 ">
                <div class="rounded-4 widget widget-tile d-flex  flex-row justify-content-between  align-items-center bg-primary">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zM432 224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H368c-8.8 0-16 7.2-16 16s7.2 16 16 16h48v48c0 8.8 7.2 16 16 16s16-7.2 16-16V384h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H448V304z"/></svg>
                    </div>
                          <div class="data-info">
                            <div class="desc text-white "><h4 class="card-title">Recepient</h4></div>
                            <div class="value text-white "><span class="number" data-toggle="counter" data-end="{{$countRecepient->count()}}">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile d-flex  flex-row justify-content-between  align-items-center bg-warning">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                    </div>
                          <div class="data-info">
                            <div class="desc text-dark"><h4 class="card-title">Report</h4></div>
                            <div class="value text-dark"><span class="number" data-toggle="counter" data-end="{{$countReport->count()}}">0</span>
                            </div>
                          </div>
                        </div>
            </div>
          </div>
@endsection
