@if($status == 1)
    <img onClick="return ajaxToggoActiveStatus({{$order_id}}, 0)" src="{{asset('image/')}}/leogo/cancel.png">
@else
    <img onClick="return ajaxToggoActiveStatus({{$order_id}}, 1)"  src="{{asset('image/')}}/leogo/checked.png">
@endif