 @extends('layouts.admin')
 
  @section('title', 'Dashboard')
  
 @section('content')
        <div class="container">
          <div class="lds-ellipsis" style="display: none"><div></div><div></div><div></div><div></div></div>
          <h2>Google Analytics Data</h2>
          <p>Veri filtrelemek için tarih seçiniz:</p>   
          <div class="input-group">
            <input type="text" class="form-control col-md-6 mb-4"  name="daterange" value="" />         
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>Tarih</th>
                <th>Ziyaretçi Sayısı</th>
                <th>Sayfa Görüntülenme Sayısı</th>
              </tr>
            </thead>
            <tbody id="analytics">
              
            </tbody>
          </table>
        </div>
@stop

@section('pageinlinejs')
<!-- Fonts -->

        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/public/analytics-laravel/app.css') }}" />
        <script type="text/javascript" src="{{ asset('/public/analytics-laravel/app.js') }}"></script>
@stop