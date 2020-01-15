@if (count($customer) > 0)
    @foreach ($customer as $item)
        {{$item}} <br>
    @endforeach
@else
    No customer yet
@endif