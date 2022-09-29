@vite('resources/css/app.css')
<div class="container p-3 font-sans">
    <header class="text-xl" style="letter-spacing:3px;"><strong>ADD NEW CLINIC</strong> <i class="fa-solid fa-hospital"></i></header>
    <form action="" method="post" class="flex flex-col pt-8" style="width:400px;">
        @csrf
        <label for="clinicName" class="p-2 tracking-wide" style="letter-spacing:2px;"><strong>Clinic name</strong></label>
        <input type="text" name="clinicName" id="clinicName" class="rounded-md hover:bg-gray-100 active:bg-gray-300 focus:bg-white">
        <label for="description" class="p-2 tracking-wide" style="letter-spacing:2px;">Clinic description</label>
        <textarea name="description" id="description" class="rounded-md p-2 hover:bg-gray-100 active:bg-gray-300 focus:bg-white" rows="4" cols="10">
        </textarea>


        <input type="submit" value="ADD CLINIC" class="bg-cyan-500 hover:bg-cyan-700 py-3 mt-6 rounded-md text-white" style="width:12vw;margin:auto;margin-top:40px;letter-spacing:2px">

    </form>
</div>