@extends('Admin.Alayout.main')
@section('main')

<section class="section main-section">
    <div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-buffer"></i></span>
          <b>Responsive table</b>
        </div>
        <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
      </div>
    </div>
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clients
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            
            
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>SUBJECT</th>
            <th>MESSAGE</th>
            <th>Action</th>
          </tr>
          </thead>

          <tbody>

          <tr>
           @foreach ($con as $item)
           <td>{{$item->con_id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->subject}}</td>
           <td>{{$item->msg}}</td>  
           <td>
            <a href="{{url('contact/'.$item->con_id.'/edit')}}"class="btn btn-primary">Edit</a>
            <a href="{{url('contact/'.$item->con_id.'/del')}}"class="btn btn-danger">Delete</a>
            </td>  
           
          </tr>
          @endforeach
          </tbody>
        </table>
        <div class="table-pagination">
          <div class="flex items-center justify-between">
            <div class="buttons">
              <button type="button" class="button active">1</button>
              <button type="button" class="button">2</button>
              <button type="button" class="button">3</button>
            </div>
            <small>Page 1 of 3</small>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
