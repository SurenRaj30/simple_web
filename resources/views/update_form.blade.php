<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>
<body>
    <div class="container">
        <header>
            @include('includes.header')
        </header>
    </div>
    
    <div class="container mt-5" style="width: 30rem;">
          @foreach ($users as $data)
              <form method="POST" action="{{route('users.update', $data->id)}}">
                @csrf
                <div class="form-group">
                  <label>MSISDN</label>
                  <input name="msisdn" type="text" class="form-control" value="{{$data->msisdn}}" readonly>
                </div>
                <div class="form-group">
                    <label>Shortcode</label>
                    <select name="shortcode" class="form-select" disabled>
                        <option selected>{{$data->shortcode}}</option>
                        <option value="1111">1111</option>
                        <option value="2222">2222</option>
                        <option value="3333">3333</option>
                        <option value="4444">4444</option>
                        <option value="5555">5555</option>
                      </select>
                  </div>
                <div class="form-group">
                    <label>Keyword</label>
                    <select name="keyword" class="form-select" disabled>
                        <option selected>{{$data->keyword}}</option>
                        <option value="AA">AA</option>
                        <option value="BB">BB</option>
                        <option value="CC">CC</option>
                        <option value="DD">DD</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-select">
                      <option selected>{{$data->status}}</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Service</label>
                    <input name="service" type="text" class="form-control" value="{{$data->service}}">
                  </div>
                  <div class="form-group">
                    <label>Charge Price</label>
                    <input name="charge_price" type="number" min="0.00" step="0.01" class="form-control" value="{{$data->charge_price}}">
                  </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
              </form>
          @endforeach
    </div>
</body>
</html>