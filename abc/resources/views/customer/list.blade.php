<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<div class="row">
        <tr>
            <td>#</td>
            <td>Ma Khach hang</td>
            <td>Name </td>
            <td>Dia chi </td>
            <td>So dien thoai</td>
        </tr>
    </div>

    <?php
            foreach ($customers as $key => $customer) { ?>



                       <td>{{ ++$key }}</td>
                    <td>{{ $customer->id_khach_hang }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->addres }}</td>
                    <td>{{ $customer->number }}</td>









    <?php } ?>

<a href="{{ route('customer.create') }}">Them Moi</a>
<a href="{{ route('customer.edit', $customer->id) }}">Sua</a>
<a href="">Xoa</a>

