@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
          <h2>Manage Your Referral Code</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
           <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            
                <div class="col-lg-12 margin-tb">
                    {!! Form::open(array('route' => 'referral.store','files'=>true,'method'=>'POST')) !!}
                       
                  <button type="submit" class="btn btn-success">Gnerate New Referral Code</button>
                  {!! Form::close() !!}

                   
                </div>
            </div>


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Referral Code </th>
            
            <th width="280px">Action</th>
        </tr>
    @foreach ($referrals as $key => $referral)
    <tr>
        <td>0</td>
        <td>{{ $referral->code }}</td>
        <td>
            
            {!! Form::open(['method' => 'DELETE','route' => ['referral.destroy', $referral->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table> 
    {!! $referrals->render() !!}


        </div>
       </div>
    </div>
  </div>
</div>


@endsection