<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center; margin: 50px">User creation page</h1>
    <form method="post" action="{{ action('AdminUsersController@store') }}" files="true" enctype="multipart/form-data">
        <table class="table">
        <!--<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">-->
        @csrf
            <tr>
            <td>
                <label for="name">Name: </label>
            </td>
            <td>
                <input type="text" name="name">
            </td>
            </tr>
            <tr>
            <td>
                <label for="password">Password: </label>
            </td>
            <td>
                <input type="password" name="password">
            </td>
            </tr>
            <tr>
            <td>
                <label for="email">Email: </label>
            </td>
            <td>
                <input type="text" name="email">
            </td>
            </tr>
            <tr>
            <td>
                <label for="email_verified_at">Verify Email: </label>
            </td>
            <td>
                <input type="text" name="email_verified_at">
            </td>
            </tr>
            <tr>
            <td>
                <label for="role_id">Role: </label>
            </td>
            <td>
                <input type="text" name="role_id">
            </td>
            </tr>
            <tr>
            <td>
                <label for="image_id">Image: </label>
            </td>
            <td>
                <input type="file" name="image_id" accept="image/png, image/jpeg">
            </td>
            </tr>

            <tr>
               <td>
                  <button type="submit">Create User</button>
               </td>
               <td>
                  <button type="reset">Delete</button>
               </td>
            </tr>


        </table>
    </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>