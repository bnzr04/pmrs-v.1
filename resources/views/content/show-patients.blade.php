@vite('resources/css/app.css')


<h1 class="bg-gray-100 font-bold text-lg uppercase py-1 text-center border-b-2 border-purple-400 rounded-md" style="letter-spacing:3px;">Patients record</h1>

<div class="container bg-gray-400 border-purple-700 border-b-4 rounded-md mt-3 pl-2 flex">
    <h2 class="text-white uppercase text-lg font-bold" id="clinicName" style="letter-spacing:2px;"></h2>
    <h3 class="text-white uppercase text-lg font-bold pl-3"><i class="fa-solid fa-child mr-1 text-yellow-300"></i>( <span id="patientNum" class="text-cyan-300"></span> )</h3>
</div>


<div class="button-container pl-0 mt-2 flex justify-between">
    <div class="container">
        <button class="bg-purple-600 hover:bg-purple-700 active:bg-purple-900 p-2 rounded-md text-white drop-shadow-lg hover:drop-shadow-md">Add patient</button>
    </div>

    <div class="container flex justify-end gap-2">
        <input type="text" name="search" class="rounded-md">
        <button type="button" class="bg-purple-500 p-2 rounded-md text-white">search</button>
    </div>
</div>

<div class="mt-2">
    <table class="table-auto bg-white border-collapse border-slate-900 w-full" id="dataTable">
        <thead class="bg-purple-400 text-white border-collapse border">
            <tr>
                <td class="border-collapse border border-slate-500 py-2 px-3 font-bold">Patient ID</td>
                <td class="border-collapse border border-slate-500 py-2 px-3 font-bold">Patient name</td>
                <td class="border-collapse border border-slate-500 py-2 px-3 font-bold">Age</td>
                <td class="border-collapse border border-slate-500 py-2 px-3 font-bold">Gender</td>
                <td class="border-collapse border border-slate-500 py-2 px-3 font-bold">Record</td>
                <td class="border-collapse border border-slate-500 py-2 px-3 font-bold">Actions</td>
            </tr>
        </thead>
        <tbody class="border-collapse border border-slate-500">
        </tbody>
    </table>
</div>