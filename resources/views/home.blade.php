@extends('layouts.app')
<style>
    button{
  border-radius: 20px;
  border: 1px solid #009345;
  background-color: #009345;
  color: #fff;
  font-size: 1rem;
  font-weight: bold;
  padding: 10px 40px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform .1s ease-in-out;

  &:active{
    transform: scale(.9);
  }

  &:focus{
    outline: none;
  }
}
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <button class="rounded-pill">
                    Enter JAMB Class!
                </button> <p></p>
                <button class="rounded-pill">
                Enter Post UTME Class!
                </button> <p></p>
                <button class="rounded-pill">
                Enter SAT Class!
                </button> <p></p>
                <button class="rounded-pill">
                Enter IELTS Class!
                </button> <p></p>
                <button class="rounded-pill">
                Pay Tuition
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
