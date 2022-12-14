@extends('include/base')

@section('content')
    <div class="flex bg-gray-500 h-screen place-content-center place-items-center">
        <div class="w-1/4 mx-auto">
            <div class="bg-white rounded p-4">
                <h1 class="font-sans font-semibold">Login Here</h1>
                <form action="{{route('login.action')}}" method="POST">
                    @csrf
                    <div class="flex flex-col my-3">
                        <label for="" class="font-xs text-gray-500">Email</label>
                        <input type="email" name="email" placeholder="Enter Email here" class="shadow-sm flex1 border-2 p-2 outline-none focus:border-green-500">
                    </div>
                    <div class="flex flex-col my-3">
                        <label for="" class="font-xs text-gray-500">Password</label>
                        <input type="password" name="password" placeholder="Enter Password here" class="shadow-sm flex1 border-2 p-2 outline-none focus:border-green-500">
                    </div>
                    <div class="flex">
                        <input type="submit" class="bg-green-700 px-5 py-4 flex-1 text-white rounded-md hover:bg-green" value="Login Here">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection