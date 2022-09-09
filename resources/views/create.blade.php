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
        <form method="POST" action="{{route('users.store')}}">
            @csrf
            <div class="form-group">
              <label>MSISDN</label>
              <input name="msisdn" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Shortcode</label>
                <select name="shortcode" class="form-select">
                    <option selected>Open this select menu</option>
                    <option value="1111">1111</option>
                    <option value="2222">2222</option>
                    <option value="3333">3333</option>
                    <option value="4444">4444</option>
                    <option value="5555">5555</option>
                  </select>
              </div>
            <div class="form-group">
                <label>Keyword</label>
                <select name="keyword" class="form-select">
                    <option selected>Open this select menu</option>
                    <option value="AA">AA</option>
                    <option value="BB">BB</option>
                    <option value="CC">CC</option>
                    <option value="DD">DD</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option selected>Open this select menu</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Service</label>
                <input name="service" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Charge Price</label>
                <input name="charge_price" type="number" class="form-control">
              </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
    </div>
</body>
</html>