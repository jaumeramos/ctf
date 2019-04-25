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
	          @foreach ($flags as $flag)

			<tr>
				<td class="num">1</td>
				<td class="num">3</td>
				<td class="team">{{ $flag->longName }}</td>
    	  @foreach ($flags->flags as $f)
            @if ($f === true)
    				<td><img src="green.png" alt="g" height="42" width="42"></td>
            @else
    				<td><img src="red.png" alt="r" height="42" width="42"></td>
            @endif
  	    @endforeach
			</tr>
	          @endforeach
		</tbody>
	</table>





          <table>
          @foreach ($flags as $flag)
              <tr>
                <td>{{ $flag->name }}</td>
                <td>{{ $flag->longName }}</td>
                <td>{{ $flag->flag }}</td>
                <td>{{ $flag->points }}</td>
              </tr>
          @endforeach
          </table>
        </div>
    </body>
</html>
