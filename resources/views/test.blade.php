<table>
    @foreach ($datas as $data)
    <tr>
        <td>{{ $data->title }}</td>
        <td>{{ $data->users }}</td>
    </tr>
    @endforeach
</table>