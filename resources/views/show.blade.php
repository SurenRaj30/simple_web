<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
</head>
<body>
    <div class="container">
        <header>
            @include('includes.header')
        </header>
    </div>

    <div class="container" style="width: 70rem">
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>MSISDN</th>
                    <th>Shortcode</th>
                    <th>Keyword</th>
                    <th>Status</th>
                    <th>Charge Price</th>
                    <th>Service</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>
<!--datatables scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
      var table = $('.data-table').DataTable({

          processing: true,
  
          serverSide: true,
  
          ajax: "{{ route('users.index') }}",
          
          columns: [
              {data: 'id', name: 'id'},
              {data: 'msisdn', name: 'msisdn'},
              {data: 'shortcode', name: 'shortcode'},
              {data: 'keyword', name: 'keyword'},
              {data: 'status', name: 'status'},
              {data: 'charge_price', name: 'charge_price'},
              {data: 'service', name: 'service'},
              {data: 'action', name: 'action'},
              
          ],

      });
    });
    
  </script>
</html>