<x-layout :overview="$overview" :json-data="$jsonData">
    <x-slot name="projectsSlot">
        <div class="container-xl mt-4">
            <div class="row row-cards">
                @php
                    $data = json_decode($jsonData, true);
                @endphp
                @foreach ($data['projects'] as $project)
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header" style="background-image: url({{ asset($project['image_path']) }});background-size: cover; background-position: center;width: 100%;height: 200px">
                                
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title text-center"><strong>{{ $project['name'] }}</strong></h3>
                                <button class="btn btn-outline-success btn-lg">
                                    <a href="{{ route('project-details',$project['id']) }}" class="nav-link">See Details</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-slot>
</x-layout>