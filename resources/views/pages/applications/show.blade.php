@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <b-card-group>
        <b-card>
            
            <form method="POST" action="{{ route('applications.update', $application) }}">
                @csrf
                @method('put')
                <b-form-group
                    id="fieldset-1"
                    label="Name"
                    label-for="name"
                >
                    <b-form-input
                        id="name"
                        name="name"
                        value="{{ $application->name }}"
                        class="@error('name') is-invalid @enderror">
                    </b-form-input>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </b-form-group>

                <b-form-group
                    label="Application id"
                >
                    <b-form-input
                        value="{{ $application->app_id }}"
                        disabled>
                    </b-form-input>
                </b-form-group>

                <b-button type="submit" variant="success" size="sm">
                    Confirm
                </b-button>
            </form>

            <template v-slot:header>
                <div>
                    <span class="mt-1 float-left">
                        Applications - {{ $application->name }}
                    </span>
                    <b-button href="{{ route('applications.index') }}" class="float-right" variant="warning" size="sm">
                        Cancel
                    </b-button>
                </div>
            </template>
        </b-card>
  </b-card-group>
</div>
@endsection
