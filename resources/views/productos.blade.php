


@extends('template')

@section('content')
<main class="pt-24 pb-20 max-w-7xl mx-auto px-6">
    <div class="mb-12">
        <h1 class="font-headline text-5xl font-extrabold text-primary tracking-tight mb-2">Precision Formulas</h1>
        <p class="text-on-surface-variant max-w-2xl text-lg">Professional-grade detailing products engineered for the ultimate finish. Laboratory-tested for durability and gloss.</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-12">
        <aside class="w-full lg:w-64 flex-shrink-0 space-y-10">
            <section>
                <h3 class="font-headline font-bold text-lg mb-4 text-primary">Categories</h3>
                <div class="space-y-2">
                    <button class="w-full text-left px-4 py-3 rounded-lg bg-primary-fixed text-on-primary-fixed font-semibold flex items-center justify-between">
                        <span>All Products</span>
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>
                    <button class="w-full text-left px-4 py-3 rounded-lg hover:bg-surface-container-high transition-colors text-on-surface-variant flex items-center justify-between">
                        <span>Exterior</span>
                        <span class="material-symbols-outlined text-sm">directions_car</span>
                    </button>
                    </div>
            </section>

            <section>
                <h3 class="font-headline font-bold text-lg mb-4 text-primary">Price Range</h3>
                <div class="px-2">
                    <div class="h-1.5 w-full bg-surface-container-highest rounded-full relative overflow-hidden">
                        <div class="absolute inset-y-0 left-0 w-2/3 bg-tertiary rounded-full"></div>
                    </div>
                    <div class="flex justify-between mt-4 font-label text-xs font-bold text-on-surface-variant">
                        <span>$0</span>
                        <span>$250+</span>
                    </div>
                </div>
            </section>
        </aside>

        <div class="flex-1">
            <div class="flex items-center justify-between mb-8">
                <span class="text-sm font-medium text-on-surface-variant">Showing <span class="text-primary font-bold">{{ $productos->count() }}</span> Products</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @foreach ($productos as $producto)
                    <div class="group flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                        <div class="relative h-64 overflow-hidden bg-surface-container">
                            {{-- Se asume que en la DB guardas la URL o el path de la imagen --}}
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                 src="{{ $producto->imagen }}" 
                                 alt="{{ $producto->nombre }}">
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-primary shadow-sm">
                                Detallado
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-headline font-bold text-lg text-primary leading-tight">{{ $producto->nombre }}</h3>
                                <div class="flex items-center gap-1 text-tertiary">
                                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="text-xs font-bold text-on-surface">5.0</span>
                                </div>
                            </div>
                            <p class="text-on-surface-variant text-sm line-clamp-2 mb-4">{{ $producto->descripcion }}</p>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xl font-bold text-primary">${{ number_format($producto->precio, 2) }}</span>
                                <button class="bg-primary text-white text-xs font-bold px-4 py-2 rounded-md hover:bg-primary-container transition-all scale-95 active:scale-90">
                                    View Detail
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection