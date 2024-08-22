<x-layout :overview="$overview" :json-data="$jsonData">
    <x-slot name="workExperienceSlot">
        <div class="container-xl mt-4">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title text-center"><strong>List of Technological Work Experiences</strong></div>
                        </div>
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-md-10">

                                </div>
                                <div class="col-md-2 mb-2">
                                    <button class="btn btn-primary">
                                        Add Experience
                                    </button>
                                </div>
                            </div>
                            <!-- Client Decision DataTable -->
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employer</th>
                                            <th>Position</th>
                                            <th>Description</th>
                                            <th>Timeline</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $data = json_decode($jsonData, true);
                                        @endphp
                                        @foreach ($data['experiences'] as $item)
                                            <tr>
                                                <td>{{ $item['id'] }}</td>
                                                <td>{{ $item['employer'] }}</td>
                                                <td>{{ $item['position'] }}</td>
                                                <td>{{ $item['description'] }}</td>
                                                <td>{{ $item['timeline'] }}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>