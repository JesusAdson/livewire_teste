<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-semibold text-xl-center">Click on the button bellow to generate a random lorem-ipsum
                    </h3>
                    <br />
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                        wire:click="getText" wire:loading.attr='disabled'>
                        Generate
                    </button>
                    {{ $click }}
                    <br />
                    <br />
                    <div class="bg-white font-semibold justify-center">
                        <p class="text-justify">{{ $response }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        window.addEventListener('swal', event => {
            swal({
                title: event.detail.title,
                icon: event.detail.type,
                text: event.detail.text
            });
        });
    </script>
@endpush
