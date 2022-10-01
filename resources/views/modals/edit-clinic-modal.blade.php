<!-- Modal -->
<div class="modal fade" id="editClinicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <header class="text-xl modal-title" style="letter-spacing:3px;"><strong>Add new clinic</strong> <i class="fa-solid fa-hospital"></i></header>
                <button type="button" class="border-1 rounded-md border-gray-300 px-3 py-2 shadow-md hover:shadow-sm active:bg-gray-100" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form action="{{ URL::to('new-clinic') }}" class="flex flex-col gap-2" id="clinic-form">
                    @csrf
                    <div class="bg-gray-200 p-2 rounded-md">
                        <label for="clinic_name" class="p-2 tracking-wide" style="letter-spacing:2px;"><strong>Clinic name</strong></label>
                        <input type="text" name="clinic_name" id="clinic_name" class="rounded-md hover:bg-gray-100 active:bg-gray-300 focus:bg-white" style="width:100%;">
                        @error('clinic_name')
                        <p class="text-xs text-danger p-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="bg-gray-200 p-2 flex flex-col rounded-md">
                        <label for="description" class="p-2 tracking-wide" style="letter-spacing:2px;">Clinic description</label>
                        <textarea name="description" id="description" class="rounded-md p-2 hover:bg-gray-100 active:bg-gray-300 focus:bg-white" rows="4" cols="10" placeholder="(optional)"></textarea>
                        @error('description')
                        <p class="text-xs text-danger p-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gray-500 text-white shadow-md hover:bg-gray-700 hover:shadow-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-purple-600 text-white shadow-md hover:bg-purple-800 hover:shadow-sm" id="add-clinic-btn">Add clinic</button>
            </div>
            </form>
        </div>
    </div>
</div>