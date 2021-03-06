@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Search customer</h3><br><br>
        <form method="get" action="{{ route('search_customer') }}">
            <!-- <label>User ID: </label>
            <input type="text" name="userID">
            <label>Email: </label>
            <input type="text" name="email">
            <label>Address: </label>
            <input type="text" name="address">
            <label>Phone:</label>
            <input type="text" name="phone"><br><br> -->
            <label>Date created:</label>
            <input type="text" name="date_up">
            <label>Date updated:</label>
            <input type="text" name="date_crea">
            <button type="submit">OK</button>
        </form>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>****************</td>
                    <td>{{$user->gender ? 'Female' : 'Male'}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->is_admin}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>

        // $(document).on('click', '.pagination a', function(e) {
        //     e.preventDefault();
        //     var page = $(this).attr('href').split('page=')[1];
        //     getRecords(page);
        // });
        //
        // function getRecords(page) {
        //     $.ajax({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         },
        //         type: 'GET',
        //         url: '/admin/user?page=' + page,
        //     }).done(function(data) {
        //         // $('.content').html(data);
        //         // url = '/admin/user?page=' + page;
        //         // window.history.pushState('string', '', 'user');
        //         console.log(data);
        //     })
        // }
    </script>
@endsection


