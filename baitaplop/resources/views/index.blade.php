<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
             List
        </div>


        @if(!isset($custome))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id_khach_hang</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">addres</th>
                    <th scope="col">number</th>
                </tr>
                </thead>
                <tbody>

                @if(count( $customes) == 0)
                    <h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5>
                @else
                    @foreach($customes as $key => $custome)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td{{ $custome->id_customer  }}></td>
                            <td{{ $custome->name  }}></td>
                            <td{{ $custome->email  }}></td>
                            <td{{ $custome->addres  }}></td>
                            <td{{ $custome->number  }}></td>


                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>due_date
        @endif
        <a href="{{ route('home') }}">< Back</a>

    </div>
</div>
</body>
</html>