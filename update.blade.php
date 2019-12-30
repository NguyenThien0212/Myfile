{{--@extends('layouts.app')--}}
    <!DOCTYPE html>
<html lang="en">
<body>
{{--@section('content')--}}
    @if(session('message'))
        <div class="">
            {{session('message')}}
        </div>
    @endif
@foreach($product as $item)
    <form name="form1" method="POST"  action="{{url('uupdate/'.$item->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div>
        <input type="hidden" name="id" value="{{$item->id}}"/>
        </div>

        <div>
            <label for="name" >Tên Sản Phẩm<span> :</span></label>
            <input type="text" name="name" value="{{$item->name}}"/>
        </div>
        <div>
            <label for="name" >Mô Tả<span> :</span></label>
            <input type="text" name="description" value="{{$item->description}}" />
        </div>
        <div>
            <label for="name" >Giá<span> :</span></label>
            <input type="number" name="price" value="{{$item->price}}" />
        </div>
@endforeach
        <div>
            <label for="name" class="">Danh Mục<span>:</span></label>
            <select name="cate">
                @foreach($cate as $cate)
                <option value="{{ $cate->id }}">{{$cate->name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="">
            <div class="">
                <button class="" type="submit" value="Home"><a href="{{ url('/hienlen') }}">HOME</a></button>
                <button class="btn btn-success" type="submit">Lưu</button>
                <button class="btn btn-default" type="reset">Hủy</button>
            </div>
        </div>
    </form>

{{--@endsection--}}
</body>

</html>
