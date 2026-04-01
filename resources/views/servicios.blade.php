


@extends('template')

@section('content')
<main>
    <section class="relative min-h-[600px] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzaDGYXPl64GBUX1i9r7jMlTt5t8tqSC0Czh6UCRNNMK7gw1L1X9oJ9Ho4CWab1ycvb9ayhQzmrEizxgujFf3Qa6bCwOHd4VVFAf1lgJbc8eqkpfrG0fTeGtMFaBKHMPIbu2c-FN7VR4xXmpVpIfA_EK1ZHmOcOHdiFN3UoYuYwfUGHhHZPzFw4BFrwgc5dd1RulKQmDnldw52vkfQRG_SBucNgtlJT1eIuIHlxpOwruKUD88P-GaJEU52q5snEfnlfwp9vL1SD_o" alt="Ceramic coating process"/>
            <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/40"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-20">
            <div class="max-w-2xl">
                <h1 class="font-headline text-5xl md:text-7xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Nuestros Servicios - <span class="text-tertiary-fixed">Cuidado Automotriz</span> de Precisión
                </h1>
                <p class="text-white/80 text-lg md:text-xl mb-10 font-medium">
                    Elevamos el estándar del detallado automotriz combinando tecnología hidrofóbica avanzada con la maestría de expertos certificados.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#pricing" class="bg-tertiary-fixed text-on-tertiary-fixed px-8 py-4 rounded-full font-bold text-lg hover:shadow-[0_0_20px_rgba(255,225,109,0.3)] transition-all">
                        Ver Paquetes
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-surface px-6" id="pricing">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-headline text-4xl font-bold text-primary mb-4 tracking-tight">Soluciones de Ingeniería Estética</h2>
                <p class="text-secondary max-w-2xl mx-auto">Selecciona el nivel de protección y detalle que tu vehículo merece.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
                @foreach($servicios as $servicio)
                    @if($loop->index == 1) {{-- Estilo para el servicio RECOMENDADO (Posición 2) --}}
                        <div class="bg-primary p-8 rounded-xl flex flex-col shadow-2xl relative overflow-hidden text-white scale-105 z-10">
                            <div class="absolute top-4 right-4 bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-black px-2 py-1 rounded uppercase tracking-widest">Recomendado</div>
                            <div class="mb-6">
                                <span class="material-symbols-outlined text-tertiary-fixed text-4xl mb-4" style="font-variation-settings: 'FILL' 1;">star</span>
                                <h3 class="font-headline text-2xl font-bold">{{ $servicio->nombre }}</h3>
                                <div class="mt-2 text-3xl font-black text-tertiary-fixed">${{ number_format($servicio->precio, 0) }}</div>
                            </div>
                            <p class="text-white/80 mb-10 flex-grow text-sm leading-relaxed">
                                {{ $servicio->descripcion }}
                            </p>
                            <a href="{{ route('contacto') }}" class="w-full py-4 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed font-black text-lg shadow-lg hover:brightness-110 transition-all text-center block">Seleccionar</a>
                        </div>
                    @else {{-- Estilo para los servicios NORMALES --}}
                        <div class="bg-white p-8 rounded-xl flex flex-col hover:shadow-xl transition-all group border border-slate-100">
                            <div class="mb-6">
                                <span class="material-symbols-outlined text-primary text-4xl mb-4">
                                    @if(str_contains(strtolower($servicio->nombre), 'motor')) settings_input_component 
                                    @elseif(str_contains(strtolower($servicio->nombre), 'detallado')) diamond 
                                    @else water_drop @endif
                                </span>
                                <h3 class="font-headline text-2xl font-bold text-primary">{{ $servicio->nombre }}</h3>
                                <div class="mt-2 text-3xl font-black text-primary">${{ number_format($servicio->precio, 0) }}</div>
                            </div>
                            <p class="text-slate-600 mb-10 flex-grow text-sm leading-relaxed">
                                {{ $servicio->descripcion }}
                            </p>
                            <a href="{{ route('contacto') }}" class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold group-hover:bg-primary group-hover:text-white transition-all text-center block">Reservar</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Resto de secciones (Diferencia Hydro-Precision y FAQs) se mantienen igual --}}
    <section class="py-24 bg-slate-50 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 relative">
                <div class="grid grid-cols-2 gap-4">
                    <img class="rounded-xl shadow-lg translate-y-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKZQKKWBnedEzjCESaSwAXnx5lax5I2A99vUkBMu3bJss3SDSh3yvI-_Wrg8BiUw_223W6nVd9Cj9DcJ6zOJckGHbbosLLE3cglVVo3GQkZMmcV6eVzRvgE4zoOmGeUqRAwUdhX3VOHhjwuYBiNsC3nSBzorMJv9k4HYENQGNzI4c2obP2_WzjkqOqyVCRV0hJQF505DpU2ze2uAdujgeL1oapP7oV3m53w32t6dISZ1E8KUbnSV1ybi41qmTiLnsJoL6VyBZLK5w" alt="Water beads"/>
                    <img class="rounded-xl shadow-lg -translate-y-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2rLJ9Yy6pH6B2kKh8pdpnEjlVHc90g1kqwF4PJP3jUCoSsV4a2QRjFCqwJc-kJn_i2jVn2WfuU2W7objMlbtQNZsJGoFvxp-3u7GAuJpGJAbtu2uHrHn4BvdGO5R-8Z3AL1LqDvB-Wqd8ACWxG9ReNRqori9koAkIwWygKo2kx3OFlfkATyBzMe2IHXJDtn5nzCVuZexWJxIBcAiUZ6mmb3OUZoa8QLKArOJUkvQUCOcexptZRjiJxwZlSvs4qFhzTsv3F4FXq-0" alt="Detailing interior"/>
                </div>
            </div>
            <div class="lg:w-1/2">
                <h2 class="font-headline text-4xl font-bold text-primary mb-8 tracking-tight">La Diferencia Hydro-Precision</h2>
                <div class="space-y-10">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary flex items-center justify-center rounded-lg">
                            <span class="material-symbols-outlined text-tertiary-fixed">precision_manufacturing</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary mb-2">Tecnología Avanzada</h4>
                            <p class="text-slate-600">Utilizamos herramientas de última generación y polímeros de nanotecnología para una protección duradera.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection