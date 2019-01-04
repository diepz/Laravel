<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<form action="{{ route('customer.store') }} " method="post">
@csrf
       <div>Id_khach_hang:<input type="text" name="id_khach_hang" ></div>
       <div>Name:<input type="text" name="name" ></div>
       <div>addres:<input type="text" name="addres" ></div>
       <div>number:<input type="text" name="number" ></div>
    <input type="submit" value="submit" name="submit">
    </form>
