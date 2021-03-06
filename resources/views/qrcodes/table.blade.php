<div class="table-responsive">
    <table class="table" id="Qrcodes-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Website</th>
        <th>Product Name</th>
        <th>Product Url</th>
        <th>Company Name</th>
        <th>Callback Url</th>
        <th>Qrcode Path</th>
        <th>Amount</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Qrcodes as $Qrcode)
            <tr>
                <td>{{ $Qrcode->user_id }}</td>
            <td>{{ $Qrcode->website }}</td>
            <td>{{ $Qrcode->product_name }}</td>
            <td>{{ $Qrcode->product_url }}</td>
            <td>{{ $Qrcode->company_name }}</td>
            <td>{{ $Qrcode->callback_url }}</td>
            <td>{{ $Qrcode->qrcode_path }}</td>
            <td>{{ $Qrcode->amount }}</td>
            <td>{{ $Qrcode->status }}</td>
                <td>
                    {!! Form::open(['route' => ['Qrcodes.destroy', $Qrcode->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('Qrcodes.show', [$Qrcode->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('Qrcodes.edit', [$Qrcode->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
