<!-- sidebar -->
<div class="container sidebar relative left-0" style="width:240px;background-color:rgba(31,41,55,0.9);max-height:800px;">

    <!-- search -->
    <div class="container p-2">
        <input type="text" name="search" placeholder="Search clinic..." class="rounded-md hover:bg-gray-200">
        <button type="submit" class="h-8 px-3 font-semibold rounded-md bg-slate-400 hover:bg-slate-500 text-white mt-1"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
    </div>

    <!-- add new clinic button -->
    <div class="container p-2 border-t-2 border-gray text-center">
        <button type="button" class="h-8 font-semibold rounded-md bg-purple-600 hover:bg-purple-800 text-white" data-bs-toggle="modal" data-bs-target="#clinicModal">
            <a class="block px-2 hover:text-white">Add new clinic <i class="fa-regular fa-square-plus relative left-1 p-1"></i></a>
        </button>

    </div>
    @include('modals.add-clinic-modal')

    <strong class="p-2 text-white text-lg" style="letter-spacing: 3px">Clinics <i class="fa-solid fa-hospital"></i></strong>

    <!-- clinics-button -->
    <div class="container clinic-btn-container leading-9 border-gray-500 border-b-2 px-0" style="height:47vh;overflow-y:auto">

        <ul>
            @foreach($clinics as $clinic)
            <li class="text-white border-white border-2 rounded-md m-1 hover:bg-slate-500"><a href="/clinic/id={{$clinic->clinic_id}}" class="block p-2 hover:text-white" id="clinic-btn">{{ $clinic->clinic_name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="container text-white p-2">
        <h1>Sunday, Sept 19, 2022</h1>
        <strong class="text-xl">04:20:00 AM</strong>
    </div>


</div>