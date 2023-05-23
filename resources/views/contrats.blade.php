    <h1>Duplicate AC Contracts</h1>

    @if ($contracts->isEmpty())
        <p>No contracts found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Contract Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contracts as $contract)
                    <tr>
                        <td>{{ $contract->numero_contrat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection