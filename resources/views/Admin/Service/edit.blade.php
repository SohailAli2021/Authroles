@extends('Admin.Alayout.main')
@section('main')

<div class="card-content">
    <form method="post" action="{{url('ser/'.$con->ser_id.'/edit')}}">
        @csrf
      <div class="field">
        <label class="label">From</label>
        <div class="field-body">
          <div class="field">
            <div class="control icons-left">
              <input class="input" type="text"  value="{{$con->name}}" name="name">
              <span class="icon left"><i class="mdi mdi-account"></i></span>
            </div>
            <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="text"  value="{{$con->desc}}" name="desc">
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                  <span class="icon right"><i class="mdi mdi-check"></i></span>
                </div>
              </div>
          </div>
          
          
        </div>
      </div>
    
     

     
      <hr>

      <div class="field grouped">
        <div class="control">
          <button type="submit" class="button green">
            Update
          </button>
        </div>
        <div class="control">
          <button type="reset" class="button red">
            Cancel
          </button>
        </div>
      </div>
    </form>
  </div>
  @endsection