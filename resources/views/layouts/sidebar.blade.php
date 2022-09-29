<!-- sidebar -->
<div class="container sidebar relative left-0" style="width:240px;background-color:rgba(31,41,55,0.9);max-height:800px;">

    <!-- search -->
    <div class="container p-2">
        <input type="text" name="search" placeholder="Search clinic..." class="rounded-md hover:bg-gray-200">
        <button type="submit" class="h-8 px-3 font-semibold rounded-md bg-slate-400 hover:bg-slate-500 text-white mt-1"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
    </div>

    <!-- add new clinic button -->
    <div class="container p-2 mt-2 border-2 border-gray border-l-0 border-r-0 border-b-0">
        <button class="h-8 font-semibold rounded-md bg-cyan-500 hover:bg-cyan-700 text-white m-auto" id="addClinic-btn">
            <a class="block px-5">ADD NEW CLINIC <i class="fa-regular fa-square-plus"></i></a>
        </button>
    </div>

    <strong class="p-2 text-white text-lg" style="letter-spacing: 3px">Clinics <i class="fa-solid fa-hospital"></i></strong>

    <!-- clinics-button -->
    <div class="container clinic-btn-container leading-9 border-gray-500 border-b-2" style="height:47vh;overflow-y:auto">

        <ul>
            @foreach($clinics as $clinic)
            <li class="text-white border-white border-2 rounded-md m-1 hover:bg-slate-500"><a href="/clinic/id={{$clinic->clinic_id}}" class="block p-2">{{ $clinic->clinic_name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="container text-white p-2">
        <h1>Sunday, Sept 19, 2022</h1>
        <strong class="text-xl">04:20:00 AM</strong>
    </div>


</div>