
@extends('template')

@section('content')
<main class="pt-32 pb-20 px-4 max-w-5xl mx-auto">
    <div class="relative mb-16 flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1 space-y-4">
            <h1 class="font-headline text-5xl md:text-6xl font-extrabold text-primary tracking-tighter leading-[0.9]">
                Reserva tu Tratamiento de <span class="text-tertiary">Precisión</span>
            </h1>
            <p class="text-on-surface-variant max-w-md">Vive el máximo nivel de cuidado automotriz. Nuestro detallado enfocado en la hidrodinámica asegura un acabado impecable.</p>
        </div>
        <div class="w-full md:w-1/2 aspect-video rounded-xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1601362840469-51e4d8d59085?auto=format&fit=crop&q=80&w=800" alt="Detallado de precisión"/>
        </div>
    </div>

    <div class="mb-12 space-y-4">
        <div class="flex justify-between text-xs font-bold font-headline uppercase tracking-widest text-primary">
            <span>1. Servicio</span>
            <span class="text-on-surface-variant/40">2. Fecha y Hora</span>
            <span class="text-on-surface-variant/40">3. Vehículo</span>
            <span class="text-on-surface-variant/40">4. Confirmación</span>
        </div>
        <div class="h-4 w-full bg-slate-200 rounded-full overflow-hidden">
            <div class="h-full w-[25%] bg-gradient-to-r from-yellow-400 to-yellow-600 shadow-[0_0_15px_rgba(233,196,0,0.4)] rounded-full transition-all duration-700 ease-out"></div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-8 md:p-12 shadow-sm border border-slate-100">
        <section class="space-y-8" id="step-1">
            <div class="border-b border-slate-100 pb-4">
                <h2 class="font-headline text-2xl font-bold text-primary">Selecciona un Nivel de Servicio</h2>
                <p class="text-on-surface-variant">Elige el nivel de cuidado que tu vehículo merece.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <label class="group relative cursor-pointer">
                    <input checked="" class="peer sr-only" name="service" type="radio"/>
                    <div class="p-6 rounded-lg bg-slate-50 border border-transparent peer-checked:border-yellow-500 peer-checked:bg-blue-50 transition-all duration-200 group-hover:bg-slate-100 h-full">
                        <div class="flex justify-between items-start mb-4">
                            <span class="material-symbols-outlined text-primary text-3xl">local_car_wash</span>
                            <span class="font-headline font-extrabold text-xl">$45</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Básico</h3>
                        <p class="text-sm text-on-surface-variant">Baño de espuma exterior, secado y detallado de neumáticos.</p>
                    </div>
                </label>

                <label class="group relative cursor-pointer">
                    <input class="peer sr-only" name="service" type="radio"/>
                    <div class="p-6 rounded-lg bg-slate-50 border border-transparent peer-checked:border-yellow-500 peer-checked:bg-blue-50 transition-all duration-200 group-hover:bg-slate-100 h-full">
                        <div class="flex justify-between items-start mb-4">
                            <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
                            <span class="font-headline font-extrabold text-xl">$85</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Premium</h3>
                        <p class="text-sm text-on-surface-variant">Básico + Tratamiento de barra de arcilla y sellado con cera.</p>
                    </div>
                </label>

                <label class="group relative cursor-pointer">
                    <input class="peer sr-only" name="service" type="radio"/>
                    <div class="p-6 rounded-lg bg-slate-50 border border-transparent peer-checked:border-yellow-500 peer-checked:bg-blue-50 transition-all duration-200 group-hover:bg-slate-100 h-full">
                        <div class="flex justify-between items-start mb-4">
                            <span class="material-symbols-outlined text-primary text-3xl">precision_manufacturing</span>
                            <span class="font-headline font-extrabold text-xl">$150</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Detallado Completo</h3>
                        <p class="text-sm text-on-surface-variant">Limpieza profunda interior/exterior y pulido profesional.</p>
                    </div>
                </label>

                <label class="group relative cursor-pointer">
                    <input class="peer sr-only" name="service" type="radio"/>
                    <div class="p-6 rounded-lg bg-slate-50 border border-transparent peer-checked:border-yellow-500 peer-checked:bg-blue-50 transition-all duration-200 group-hover:bg-slate-100 h-full">
                        <div class="flex justify-between items-start mb-4">
                            <span class="material-symbols-outlined text-primary text-3xl">earth_engine</span>
                            <span class="font-headline font-extrabold text-xl">$120</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Motor</h3>
                        <p class="text-sm text-on-surface-variant">Desengrasado y protección del compartimento del motor.</p>
                    </div>
                </label>
            </div>
        </section>

        <div class="mt-12 flex justify-between items-center pt-8 border-t border-slate-100">
            <button class="text-primary font-bold px-6 py-3 flex items-center gap-2 hover:bg-slate-100 rounded-full transition-all">
                <span class="material-symbols-outlined">arrow_back</span> Atrás
            </button>
            <button class="bg-primary text-white px-10 py-3 rounded-md font-bold hover:opacity-90 transition-all flex items-center gap-2">
                Siguiente Paso <span class="material-symbols-outlined">arrow_forward</span>
            </button>
        </div>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-slate-50 p-6 rounded-xl space-y-3">
            <span class="material-symbols-outlined text-yellow-600" style="font-variation-settings: 'FILL' 1;">verified_user</span>
            <h4 class="font-headline font-bold">Brillo Garantizado</h4>
            <p class="text-xs text-on-surface-variant">Usamos químicos pH-neutros y agua desionizada para un acabado perfecto.</p>
        </div>
        <div class="bg-slate-100 p-6 rounded-xl space-y-3">
            <span class="material-symbols-outlined text-yellow-600" style="font-variation-settings: 'FILL' 1;">timer</span>
            <h4 class="font-headline font-bold">Entrega Rápida</h4>
            <p class="text-xs text-on-surface-variant">Precisión no significa espera. La mayoría de trabajos listos en < 2h.</p>
        </div>
        <div class="bg-slate-50 p-6 rounded-xl space-y-3">
            <span class="material-symbols-outlined text-yellow-600" style="font-variation-settings: 'FILL' 1;">location_on</span>
            <h4 class="font-headline font-bold">Instalaciones Premium</h4>
            <p class="text-xs text-on-surface-variant">Espera en nuestro lounge de lujo con WiFi de alta velocidad y café gourmet.</p>
        </div>
    </div>
</main>

<div class="fixed bottom-8 right-8 hidden lg:flex flex-col gap-3 z-40">
    <div class="bg-white/90 backdrop-blur shadow-2xl p-4 rounded-xl border border-slate-200 max-w-[200px]">
        <div class="flex items-center gap-3 mb-2">
            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
            <span class="text-[10px] font-bold uppercase tracking-widest text-primary">Disponibilidad en Vivo</span>
        </div>
        <p class="text-xs font-semibold">Hoy: 3 cupos disponibles</p>
    </div>
</div>
@endsection