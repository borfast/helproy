<ul>
    @foreach($animal_types as $animal_type)
    <li>{{ $animal_type->name }}</li>
    @endforeach
</ul>
