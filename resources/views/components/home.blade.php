<x-layout :overview="$overview" :json-data="$jsonData">
    @php
        $data = json_decode($jsonData, true);
    @endphp
    <x-slot name="homeSlot">
        <div class="container-xl mt-4">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-image: url({{ asset($data['image_path']) }});background-size: cover; background-position: center;width: 100%;height: 400px">

                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title"><strong>About Me</strong></h3>
                            <p>
                                {{ $data['about'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>