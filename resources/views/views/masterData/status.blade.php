@extends('includes.main')
@push('css')
    
@endpush

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Status</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active">Master Data / Status</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Table with hoverable rows</h5>

            <!-- Table with hoverable rows -->
            <table id="tabel-main" class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama status</th>
                  <th scope="col">Warna</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
            <!-- End Table with hoverable rows -->

          </div>
        </div>

     
      </div>
    </section>

  </main><!-- End #main -->
@endsection

@push('scripts')
    <script src="{{ URL::asset('js/status.js') }}" type="text/javascript"></script>
@endpush