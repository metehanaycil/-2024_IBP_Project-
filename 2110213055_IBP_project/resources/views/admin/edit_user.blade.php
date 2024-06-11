<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        input[type='text']
        {
            width: 400px;
            height: 50px;
        }
        .table_deg
        {
            text-align: center;
            margin: auto;
            border: 2px solid skyblue;
            margin-top: 50px;
            width: 500px;

        }
        th
        {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        td
        {
            color: white;
            padding: 10px;
            border: 2px solid skyblue;

        }

    </style>
</head>
<body>
@include('admin.header')

@include('admin.sidebar')
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h1 style="color: white">Update User</h1>
            <div>


                <form action="{{url('update_user',$data->id)}}" method="post">
                    @csrf
                    <table class="table_deg">
                        <tr>
                    <td>
                        <input type="text" name="id" value="{{$data->id}}">
                    <input type="text" name="name" value="{{$data->name}}">
                    <input type="text" name="email" value="{{$data->email}}">
                    <input type="text" name="usertype" value="{{$data->usertype}}">
                    <input type="text" name="phone" value="{{$data->phone}}">
                    <input type="text" name="address" value="{{$data->address}}">



                    <input  class="btn btn-secondary" type="submit" value="Update User">
                    </td>
                        </tr>
                    </table>
                </form>


            </div>




        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"> </script>
<script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admincss/js/charts-home.js')}}"></script>
<script src="{{asset('admincss/js/front.js')}}"></script>
</body>
</html>
