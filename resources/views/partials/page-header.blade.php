<div class="page-header">
	<div class="container">
		<h2>{{ $page_title or 'Заявки' }}</h2>
		<p>Общее количество заявок:</p>
		<p> 
			@if (isset($count) && $count > 0)
			    {{ $count }}
			@else
			    {{'Пока заявок нет'}}
			@endif
		</p>
	</div>
</div>