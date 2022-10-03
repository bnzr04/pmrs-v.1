<x-app-layout>

    <div class="container-fluid flex relative h-full p-0">

        @include('layouts.sidebar')

        <!-- content -->
        <div class="container bg-gray-300 p-2 h-full border-2 overflow-auto" id="main-content" style="padding:20px;">
        </div>

    </div>
</x-app-layout>