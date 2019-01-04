<form action="{{ route('customer.update', $customers->id) }}" method="post">
    @csrf
Ma Khach hang:<input type="text" name="id_khach_hang" value="{{ $customers->id_khach_hang }}">
Name: <input type="text" name="name" value="{{ $customers->name }}">
Dia chi: <input type="text" name="dia_chi" value="{{ $customers->addres }}">
So dien thoai <input type="text" name="so_dien_thoai" value="  {{ $customers->number }}">
    <input type="submit" value="submit" name="submit">
</form>
