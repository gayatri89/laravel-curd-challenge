<tbody class="text-gray-600 text-sm font-light">
    @foreach($users as $value)
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->id}}</td>
            <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->first_name}}</td>
            <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->last_name}}</td>
            <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->email_address}}</td>
        </tr>
    @endforeach
</tbody>