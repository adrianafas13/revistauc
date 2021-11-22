
@extends('layouts.applayout')
@section('content')
<div class="main">
  <br>

  <div class="container" >
    <h4><b>INFORMACÍON</b></h4>
    <hr>

    @if (count($information))
      @foreach ($information as $info)
        <div class="accordion" id="myCollapsible">

          <div class="card">

            <div class="card-header" id="heading">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button"  id="#collapse{{ $info->id }}" data-toggle="collapse" href="#collapse{{ $info->id }}" aria-expanded="false" aria-controls="collapse{{ $info->id }}">
                  <h6><b>{{ $info->information_title }}<i class="fas fa-chevron-down"></i></b></h6>
                </button> 
              </h2>
            </div>

            <div id="collapse{{ $info->id }}" class="collapse in" data-parent="#collapse{{ $info->id }}">
              <div class="card-body">
                <p>{!! $info->information_text !!}</p>
              </div>
            </div>

          </div>

        </div>

      @endforeach
    @endif

  </div>
  <br>

</div>
@endsection
