@foreach ($companies as $company)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $company['name'] }}</td>
    <td>{{ $company['company_type']['name'] }}</td>
    <td>{{ $company['email'] }}</td>
    <td>{{ $company['phone'] }}</td>
    <td>{{ $company['address'] }}</td>
    <td>
        <a href="javascript:"
        data-param="{{ $company['id'] }}"
        data-url="{{  route($role . '.company.edit', $company['id']) }}"
        data-size="md"
        title="{{ __('Edit Company') }}" class="edit btn btn-info btn-sm btn-rounded">
        <i class="fas fa-edit"></i>
        </a>
        <a href="javascript:"
        data-param="{{ $company['id'] }}"
        data-url="{{  route($role . '.company.delete', $company['id']) }}"
        data-size="md"
        title="{{ __('Delete Company') }}" class="delete btn btn-danger btn-sm btn-rounded">
        <i class="fas fa-trash"></i>
        </a>

    </td>
</tr>

@endforeach
