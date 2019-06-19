@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form method="post" action="{{ route('answer') }}">
    @csrf
    
    <label>Year</label>
    <select name="year">
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
  <option value="2027">2027</option>
  <option value="2028">2028</option>
  <option value="2029">2029</option>
  <option value="2030">2030</option>
  <option value="2031">2031</option>
  <option value="2032">2032</option>
  <option value="2033">2033</option>
  <option value="2034">2034</option>
  <option value="2035">2035</option>
  <option value="2036">2036</option>
  <option value="2037">2037</option>
  <option value="2038">2038</option>
  <option value="2039">2039</option>
  <option value="2040">2040</option>
  <option value="2041">2041</option>
  <option value="2042">2042</option>
  <option value="2043">2043</option>
  <option value="2044">2044</option>
  <option value="2045">2045</option>
  <option value="2046">2046</option>
  <option value="2047">2047</option>
  <option value="2048">2048</option>
  <option value="2049">2049</option>
  <option value="2050">2050</option>
  <option value="2051">2051</option>
  <option value="2052">2052</option>
  <option value="2053">2053</option>
  <option value="2054">2054</option>
  <option value="2055">2055</option>
  <option value="2056">2056</option>
  <option value="2057">2057</option>
  <option value="2058">2058</option>
  <option value="2059">2059</option>
  <option value="2060">2060</option>
  <option value="2061">2061</option>
  <option value="2062">2062</option>
  <option value="2063">2063</option>
  <option value="2064">2064</option>
  <option value="2065">2065</option>
  <option value="2066">2066</option>
  <option value="2067">2067</option>
  <option value="2068">2068</option>      
</select>    
        <label>Month</label>
    <select name="month">
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
</select>
<label>day</label>
    <select name="day">
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
  <option value="31">31</option>
</select>
<label>Earthquake Level</label>
    <select name="level">
  <option value="5">-6</option>
  <option value="6">6-7</option>
  <option value="7">7-</option>
  </select>
  <label>Place</label>
<select name="place">
<option value="world">World</option>
  <option value="Japan">Japan</option>
  <option value="America">America</option>
  <option value="Philipine">Philipine</option>
  </select>
<a href="/answer"><button class="btn btn-primary">search</button></a>
    </form>
    </div>
    
    <div class="col-md-3"></div>
</div>
@endsection