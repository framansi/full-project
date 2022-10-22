<x-main>


    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
            <div class="row gx-5">
                @foreach ($items as $item)
                    <x-card :item="$item" />
                @endforeach
            </div>
        </div>
    </section>


</x-main>
