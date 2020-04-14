@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <b-card-group>
        <b-card
            header="Applications"
            header-tag="header"
        >
         <div>
            <b-form-group
                id="fieldset-1"
                description="Let us know your name."
                label="Enter your name"
                label-for="input-1"
            >
            <b-form-input id="input-1" v-model="name" :state="state" trim></b-form-input></b-form-group>
        </div>

            <template v-slot:header>
                <div>
                    <span class="mt-1 float-left">
                        Create application
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
