@extends('pagetpl')

@section('pageTitle') Marketplace @stop

@section('content')
<h1>@yield('pageTitle')</h1>
  <div class="row">
@foreach($stores as $store)
  <div class="col-md-3">
    <div class="panel panel-info">
      <div class="panel-heading">{{$store->name}} <span class="pull-right"><em>{{ $store->beat_price }} AR </em></span></div>
      <div class="panel-body" style="padding:0px">
      <div class="col-md-6"  style="padding:0px">
      <img src=  {{ asset($store->cover) }} class="img-responsive" />

      </div>
      <div class="col-md-6">
        <dl class="dl-horizontal">
          <style>
          dl{
            margin-bottom: 2px
          }

          .dl-horizontal dt{
            width:50px
          }

          .dl-horizontal dd{
            margin-left: 55px;
            font-weight:bold
          }
          </style>
    <dt>Genre</dt>
    <dd> {{ $store->music_genre }}</dd>
                <dt>Length</dt>
                <dd>  {{ $store->length }}min
                <dt>Size</dt>
                <dd>  {{ number_format($store->size/1000000) }}mb</dd>
            </dl>
            <a href={{'details/'.$store->id}} class="btn btn-sm btn-info" role="button"><span class="fa fa-binoculars"></span></a>
            <a href={{'checkout/'.$store->id}} class="btn btn-sm btn-success" role="button"><span class="fa fa-shopping-cart"></span> Pay </a>
      </div>
      </div>
    </div>
  </div>
@endforeach
</div><!-- /.row -->

@stop
