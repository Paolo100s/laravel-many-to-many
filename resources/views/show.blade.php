@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1>{{$project->name}}</h1>
        <p>{{$project->description}}</p>
        <ul class="list-unstyled">
            <li>{{$project->start_date}}</li>
            <li>{{$project->end_date}}</li>
            <li>{{$project->difficulty}}</li>
            <li>Type: {{$project->type->name}}</li>
            <li>Technologies:
                @if (count($project->technologies)>0)
                    @foreach ($project->technologies as $technology)
                        @if($loop->last)
                            {{$technology->name}}
                        @else
                            {{$technology->name}},
                        @endif
                    @endforeach
                @else
                    NO TECHNOLOGIES
                @endif
            </li>
        </ul>
    </div>
@endsection
