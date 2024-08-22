<x-layout :overview="$overview" :project-details="$projectDetails">
    <x-slot name="pjctDetails">
        <div class="container-xl mt-4">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-image: url({{ asset($projectDetails['image_path']) }});background-size: cover; background-position: center;width: 100%;height: 400px">

                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title"><strong>{{ $projectDetails['name'] }}</strong></h3>
                            <p>{{ $projectDetails['description'] }}</p>
                            @php
                                $techSpecs = explode(',',$projectDetails['tech_specs']);
                            @endphp
                            <p>
                                <h3>Technology Specifications:</h3>
                                <ul>
                                    @foreach ($techSpecs as $item)
                                        <li class="nav-link"><strong>{{ $item }}</strong></li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>