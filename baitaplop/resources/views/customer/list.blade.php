@extends('home')

<div class="row">
    <div class="col-md-12">
        <h2>Danh sách Học sinh</h2>
    </div>
    <div class="col-12">

    </div>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id_khach_hang</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">addres</th>
                <th scope="col">number</th>

                <th></th>
                <th></th>
            </tr>
            </thead>
            @foreach($customes as $key => $custome)

                    <td{{ $custome->id_customer  }}></td>
                    <td{{ $custome->name  }}></td>
                    <td{{ $custome->email  }}></td>
                    <td{{ $custome->addres  }}></td>
                    <td{{ $custome->number  }}></td>


                    <td><a href="{{ route('customer.edit', $custome->id) }}">sửa</a></td>
                    <td><a href="{{ route('customer.destroy', $custome->id) }}" class="text-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>


                </tr>
                @endforeach
        </table>
        <a href="{{ route('customer.create') }}" class="btn btn-primary">Thêm mới</a>

    </div>
</div>