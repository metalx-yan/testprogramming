@for ($i = 1; $i < 10; $i++)
	@for ($j = $i; $j < 10 ; $j++)
		@if ($j % 2 == 0 )
			<b>{{ $j }}</b> 
			@else
			{{ $j }}
		@endif
	@endfor
	<br>
@endfor