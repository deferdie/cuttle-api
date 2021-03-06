@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <b-card-group>
        <b-card
            header="Applications"
            header-tag="header"
        >
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $application)
                        <tr>
                            <td scope="row">
                                {{ $application->name }}
                            </td>
                            <td scope="row">
                                <a href="{{ route('applications.show', $application) }}">Manage</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <template v-slot:header>
                <div>
                    <span class="mt-1 float-left">
                        Applications
                    </span>
                    <b-button href="{{ route('applications.create') }}" class="float-right" variant="primary" size="sm">
                        Create application
                    </b-button>
                </div>
            </template>
        </b-card>
  </b-card-group>
</div>
@endsection
