
@section('content')
@if (Session::has('success'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
            <div class="alert alert-success">
            {{ Session::get('success') }}
                </div>
            </div>
@endif

    <div class="card">
    <div class="card-header">
        <h4 class="card-title">Products</h4>       
    </div>
    <div class="card-content collapse show">
        <div class="card-body card-dashboard">            
        <div class="table-responsive" id="get-items">

       </div>   
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script>  
getitems();
   function getitems() {
     $.ajax({
       url: '/products/ajax',
       method: 'get',
       success: function(response) {
         $("#get-items").html(response);
         $("table").DataTable({
           order: [0, 'desc']
         });
       }
     });
   }
   </script>
@endsection