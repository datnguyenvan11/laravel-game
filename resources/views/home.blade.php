<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url("http://sfwallpaper.com/images/background-gaming-4.jpg");
            background-size: cover;
        }

        .imglogo {
            border-radius: 10px;
            margin-left: 40px;
            margin-top: 20px;

        }

        .slogan {
            text-align: center;
            font-size: 60px;
            font-family: 'Abril Fatface', cursive;
            color: white;
            margin-top: 40px;

        }

        .header {

        }

        .cart {
            width: 100%;
            height: 50px;
            font-size: 25px;
            margin-bottom: 10px;
            margin-left: 3px;
        }

        .cart a {
            margin-left: 40px;
            text-decoration: none;
            color: white;
        }

        .menu {
            text-align: center;
        }

        .imgmenu {
            margin-left: 15px;
        }

        .menu {
            background: rgba(196, 211, 235, 0.24);
            height: 600px;
            margin-top: 1px;
        }

        .active-pink-1 input {
            border-bottom: 1px solid #ce93d8;
            box-shadow: 0 1px 0 0 #ce93d8;
            width: 620px;
            height: 50px;
        }

        .table {
            margin-top: 50px;
            width: 100%;
            margin-left: 50px;
        }

        .title {
            margin: 5px;
            color: white;
        }

        .alert {
            display: none;
        }
tr{
    color: white;
}

    </style>
</head>
<body>
<div class="container">
    <div class="row header">
        <div class="col-mg-3">
            <img class="imglogo" width="50%" height="70%"
                 src="https://img.freepik.com/free-vector/video-game-logo-template-with-modern-style_23-2147834934.jpg?size=338&ext=jpg"
                 alt="">
        </div>
        <div class="slogan col-mg-7">
            Hãy chơi theo cách của bạn
        </div>
        <div class="col-mg-7"></div>
    </div>
</div>
<div class="row" style="height: 2px;border: 1px solid #434343"></div>
<div class="container">
    <div class="row navbar1 ">
        <div class=" menu col-3">
            <div class="  row">
                <img class="imgmenu" src="https://img.icons8.com/nolan/64/000000/menu.png">
            </div>
            <div class=" cart row">
                <a href="/game">
                    Danh sách Game </a>
            </div>
            <div class="cart row">
                <a href="/game/create">
                    Thêm game
                </a></div>

        </div>
        <div style="margin-top: 40px" class="col-9">
            <div class=" title row"><h2>Danh sách Game</h2></div>
            <div style="padding-left: 47px" class="row">
                <div class="md-form active-pink active-pink-1">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
                <!-- Example split danger button -->
                <div style="margin-left: 10px;width: 90px" class="btn-group">
                    <button type="button" class="btn btn-secondary">Thể loại</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <input style="width: 70px;margin-left: 15px" type="submit" class="btn btn-primary" value=" Tìm kiếm">
            </div>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="checkAll" id="checkedAll"> CheckAll</th>
                        <th>Tên</th>
                        <th>Mã</th>
                        <th>Thể loại</th>
                        <th>Giá</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($game as $regame )
                        <tr>
                            <td><input type="checkbox" class="checkSingle" name="checkAll"></td>
                            <td>{{$regame->name}}</td>
                            <td>{{$regame->ma}}</td>
                            <td>{{$regame->theloai}}</td>
                            <td>{{$regame->gia}}</td>
                            <td>

                                    <form style="margin-bottom: 5px" action="{{route('game.destroy',$regame->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input style="width: 70px" type="submit"
                                               class="btn btn-danger" id="delete" value="Xoá">
                                    </form>

                                    <a href="{{ route('game.edit',$regame->id)}}"> <input style="width: 70px"
                                                                                          type="submit"
                                                                                          class="btn btn-primary"
                                                                                          id="delete" value="Sửa"></a>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="row">{{$game->links()}}</div>

            </div>
        </div>


    </div>
</div>
<div style="height: 40px;background: #1b4b72;text-align: center;line-height: 40px">Copyright GameCenter</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script>
    function toggle(source) {
        checkboxes = document.getElementsByName('foo');
        for (var checkbox in checkboxes)
            checkbox.checked = source.checked;
    }
</script>
<script>
    $(document).ready(function () {
        $("#checkedAll").change(function () {
            if (this.checked) {
                $(".checkSingle").each(function () {
                    this.checked = true;
                });
            } else {
                $(".checkSingle").each(function () {
                    this.checked = false;
                });
            }
        });

        $(".checkSingle").click(function () {
            if ($(this).is(":checked")) {
                var isAllChecked = 0;

                $(".checkSingle").each(function () {
                    if (!this.checked)
                        isAllChecked = 1;
                });

                if (isAllChecked == 0) {
                    $("#checkedAll").prop("checked", true);
                }
            } else {
                $("#checkedAll").prop("checked", false);
            }
        });
    });


</script>
</body>
</html>