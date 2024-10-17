@extends('layouts.admin')

@section('content')
{{-- Tra cứu theo ngày --}}
<form action="{{ route('revenue-search-day') }}" method="POST">  
    @csrf
    <div class="container">
        <h4 class="text-primary">Tra Cứu Doanh Thu Theo Ngày</h4>
        <br>
        <div class="row">
            <div class="col-md-4">
                <input type="date" value="{{ date('Y-m-d')}}" name="dateA" class="form-control">
            </div>  
            <div class="col-md-4">
                <input type="date" value="{{ date('Y-m-d')}}" name="dateB" class="form-control">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-sm"> Lọc </button>
            </div>     
        </div>
    </div>
</form>
<br>
<hr>

{{-- Tra cứu theo tháng --}}
<form action="{{ route('revenue-search-month') }}" method="POST">
    @csrf
    <div class="container">
        <h4 class="text-primary">Tra Cứu Theo Tháng</h4>
        <div class="row">
            <div class="col-md-4">
                <label for="month">Chọn Tháng:</label>
                <select name="month" id="month" class="form-control">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-md-4">
                <label for="year">Chọn Năm:</label>
                <input type="number" value="{{ date('Y') }}" name="year" class="form-control" placeholder="Nhập năm">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-sm"> Lọc </button>
            </div>
        </div>
    </div>
</form>
<br>
<hr>
{{-- Tra cứu theo quý --}}
<form action="{{ route('revenue-search-quarter') }}" method="POST">  
    @csrf
    <div class="container">
        <h4 class="text-primary">Tra Cứu Doanh Thu Theo Quý</h4>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label for="quarter">Chọn Quý:</label>
                <select name="quarter" id="quarter" class="form-control">
                    <option value="1">Quý 1</option>
                    <option value="2">Quý 2</option>
                    <option value="3">Quý 3</option>
                    <option value="4">Quý 4</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-sm"> Lọc </button>
            </div>     
        </div>
    </div>
</form>
<br>
<hr>

{{-- Tra cứu theo năm --}}
<form action="{{ route('revenue-search-year') }}" method="POST">
    @csrf
    <div class="container">
        <h4 class="text-primary">Tra Cứu Doanh Thu Theo Năm</h4>
        <div class="row">
            
            <br>
            <div class="col-md-4">
                <input type="number" value="{{ $selectedYear ?? '' }}" name="year" class="form-control" placeholder="Nhập năm">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-sm"> Lọc </button>
            </div>
        </div>
    </div>
</form>


<div class="container">
    <h3>Kết Quả Tra Cứu Doanh Thu</h3>
    <p>Ngày Bắt Đầu: <b> 00/00/0000 </b></p>
    <p>Ngày Kết Thúc: <b>00/00/0000 </b></p>

    <p>Doanh Thu: <b>0 VNĐ </b></p>
</div>


@endsection