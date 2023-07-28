@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1>PROJECTS</h1>
        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li>
                    <a href="{{route('project.show', $project -> id )}}">
                        {{ $project->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
