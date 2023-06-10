@foreach ($collections as $item)
{{-- @dd($item['item_category']['name']) --}}
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item['name'] }}</td>
    <td>{{ $item['item_category']?$item['item_category']['name']:''}}</td>
    <td>{{ $item['code'] }}</td>
    <td>{{ $item['cost'] }}</td>
    <td>{{ $item['amount'] }}</td>
    <td>
        {{-- <a href="javascript:"
        data-param="{{ $item['id'] }}"
        data-url="{{  route($role . '.test.edit', $item['id']) }}"
        data-size="md"
        title="{{ __('Edit Test') }}" class="edit btn btn-info btn-sm btn-rounded">
        <i class="fas fa-edit"></i>
        </a> --}}
        {{-- <a href="javascript:"
        data-param="{{ $item['id'] }}"
        data-url="{{  route($role . '.test.delete', $item['id']) }}"
        data-size="md"
        title="{{ __('Delete Test') }}" class="delete btn btn-danger btn-sm btn-rounded">
        <i class="fas fa-trash"></i>
        </a> --}}

    </td>
</tr>

@endforeach
