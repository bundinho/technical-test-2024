<x-layout>
    <div class="text-white text-center flex p-x-4 flex-col">
        @if ($success === false)
            <p>Could not retrieve data: {{ $error }}</p>
        @elseif (count($data) === 0)
            <p>No match found for the selected date</p>
        @else
            @foreach ($data as $match)
                <h2 class="text-xl p-4">{{ \Carbon\Carbon::parseFromLocale($match['Day'])->format('D, M j') }}</h2>
                <div class="px-20 mx-20 items-center">
                    <table class="w-full">
                        <tr>
                            <td>{{ $match['HomeTeam'] }}</td>
                            <td>{{ $match['HomeTeamScore'] }}</td>
                            <td>{{ $match['Status'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ $match['AwayTeam'] }}</td>
                            <td>{{ $match['AwayTeamScore'] }}</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @endif
    </div>

</x-layout>
