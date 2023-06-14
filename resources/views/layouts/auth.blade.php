@extends('layouts.base')



@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-12 md-6 offset-md3">


                    @yield('auth.content')


                </div>

            </div>

        </x-container>

    </section>
@endsection
