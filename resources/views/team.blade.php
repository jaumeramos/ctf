<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/ctf.css">

        <title>Institut de l'Ebre: Capture The Flag</title>

    </head>
    <body>
	<h1>Flags Team {{$longName}}</h1>

        <div>

	<table class="ctfTable">
		<thead>
			<tr>
				<th>Flag</th>
				<th>Points</th>
				<th>Captured</th>
			</tr>
		</thead>
		<tbody>
	          @foreach ($flags as $k => $f)

			<tr>
				<td class="num">{{ $f->name }}</td>
				<td class="num">{{ $f->points}}</td>
				<td class="team">{{ $f->pivot->captured }}</td>
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
