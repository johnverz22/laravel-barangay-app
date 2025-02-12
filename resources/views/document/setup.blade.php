<x-app-layout>
    <div class="max-w-3xl mx-auto mt-12 bg-white rounded-lg shadow-lg p-[100px]">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Setup</h1>
        
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <!-- Municipality -->
                <div class="space-y-2">
                    <label for="municipality" class="block text-gray-700">Municipality</label>
                    <input type="text" name="municipality" id="municipality" value="{{ old('municipality', '') }}" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Municipality">
                    @error('municipality')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Municipal Seal (Image Upload) -->
                <div class="space-y-2">
                    <label for="municipal_seal" class="block text-gray-700">Municipal Seal</label>
                    <input type="file" name="municipal_seal" id="municipal_seal" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('municipal_seal')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Barangay -->
                <div class="space-y-2">
                    <label for="barangay" class="block text-gray-700">Barangay</label>
                    <input type="text" name="barangay" id="barangay" value="{{ old('barangay', '') }}" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Barangay">
                    @error('barangay')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Barangay Seal (Image Upload) -->
                <div class="space-y-2">
                    <label for="barangay_seal" class="block text-gray-700">Barangay Seal</label>
                    <input type="file" name="barangay_seal" id="barangay_seal" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('barangay_seal')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Captain -->
                <div class="space-y-2">
                    <label for="captain" class="block text-gray-700">Captain</label>
                    <input type="text" name="captain" id="captain" value="{{ old('captain', '') }}" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Captain's Name">
                    @error('captain')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Content -->
                <div class="space-y-2">
                    <label for="content" class="block text-gray-700">Content</label>
                    <textarea name="content" id="content" rows="4" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Content">{{ old('content', '') }}</textarea>
                    @error('content')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Fee -->
                <div class="space-y-2">
                    <label for="fee" class="block text-gray-700">Fee</label>
                    <input type="number" name="fee" id="fee" value="{{ old('fee', 0) }}" step="0.01" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Fee">
                    @error('fee')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tax -->
                <div class="space-y-2">
                    <label for="tax" class="block text-gray-700">Tax</label>
                    <input type="number" name="tax" id="tax" value="{{ old('tax', 0) }}" step="0.01" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Tax">
                    @error('tax')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>