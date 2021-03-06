<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/ctf.css">

        <title>Institut de l'Ebre: Capture The Flag</title>

    </head>
    <body>
	<h1>RANKING CTF FuturEbre</h1>

        <div>

	<table class="ctfTable">
		<thead>
			<tr>
				<th>Ranking</th>
				<th>Points</th>
				<th>Team</th>
				<th>F1</th>
				<th>F2</th>
				<th>F3</th>
				<th>F4</th>
				<th>F5</th>
				<th>F6</th>
				<th>F7</th>
				<th>F8</th>
				<th>F9</th>
			</tr>
		</thead>
		<tbody>
	          @foreach ($teams as $k => $t)

			<tr>
				<td class="num">{{$k+1}}</td>
				<td class="num">{{ $t['points'] }}</td>
				<td class="team">{{ $t['longName'] }}</td>
        @for ($i = 1; $i <= $flags; $i++)
          @if (isset($t['F'.$i]))
          <td><img src="green.png" alt="g" height="42" width="42"></td>
          @else
          <td><img src="red.png" alt="r" height="42" width="42"></td>
          @endif
        @endfor

			</tr>
	          @endforeach
		</tbody>
	</table>


        </div>

    </body>
</html>
