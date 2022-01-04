@extends('layouts.app')

@section('content')
<div class="border border-dark ms-4 rounded" style="width: 96%">
    <center><img src="{{ $game->gameDetails->imgurl }}" class="rounded mt-4" width="250" alt="..."></center>
    <br><br>
    <center><div>
        <h5 class="" style="font-weight: bold">CONTENT IN THIS PRODUCT MAY NOT BE APPROPRIATE FOR ALL AGES, OR MAY NOT</h5>
        <h5 style="font-weight: bold">BE APPROPRIATE FOR VIEWING AT WORK.</h5>
    </div></center>
    <br>
    <div class="d-flex justify-content-center">
        <div class="shadow-lg rounded" style="width: 60%; background-color: lightblue">
            <br>
            @if(session()->has('invalid'))
                <center><div class="bg-danger text-light mb-2 rounded" style="width: 70%">
                    <span style="font-size: 20px" class="">{{ session('invalid') }}</span><br>
                </div></center>
            @endif
            <br>
            <center><span class="text-dark text-center">Please enter your birth date to continue:</span></center>
            <br>
            <form action="/verif/{{ $game->title }}" method="POST">
                @csrf
                <div class="" style="margin-left: 32%">
                    <label for="date" class="text-dark me-5" style="font-weight: bold">Date</label>
                    <label for="month" class="text-dark me-5 ms-3" style="font-weight: bold;">Month</label>
                    <label for="year" class="text-dark " style="font-weight: bold">Year</label>
                </div>
                <div class="form-group mb-4 d-inline-flex" style="margin-left: 31.5%">
                    <select name="day" id="dayselection" class="form-select">
                        <option value="0" selected>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                    <select name="month" id="monthselection" class="form-select ms-2">
                        <option value="0" selected>Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="year" id="yearselection" class="form-select ms-2">
                        <option value="0" selected>Year</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                    </select>
                </div>
                <center>
                    <button type="submit" class="btn-secondary btn pe-4 ps-4 mt-1 mb-5">View Page</button>
                    <button type="button" class="btn-light btn pe-4 ps-4 mt-1 mb-5" onclick="window.location.href = '/'">Cancel</button>
                </center>
            </form>
        </div>
    </div>
    <br><br>
</div>
@endsection
