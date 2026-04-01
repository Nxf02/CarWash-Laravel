{{-- @extends('template')

@section('content')
<main class="pt-24 pb-20 max-w-7xl mx-auto px-6">
    <div class="mb-12">
        <h1 class="font-headline text-5xl font-extrabold text-primary tracking-tight mb-2">Reserva tu Cita</h1>
        <p class="text-on-surface-variant max-w-2xl text-lg">Selecciona el servicio y horario que mejor te convenga. Precisión en cada detalle, directo en tu puerta o en nuestro taller.</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-12">
        <aside class="w-full lg:w-64 flex-shrink-0 space-y-10">
            <section class="rounded-xl overflow-hidden bg-primary text-white p-6 relative">
                <div class="relative z-10">
                    <span class="bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-widest">Atención</span>
                    <h4 class="font-headline font-bold mt-2 leading-tight">Servicio a domicilio disponible</h4>
                    <p class="text-xs text-on-primary-container mt-2 opacity-80">Consulta disponibilidad en tu zona al agendar.</p>
                </div>
                <div class="absolute -right-4 -bottom-4 opacity-20">
                    <span class="material-symbols-outlined text-7xl" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
                </div>
            </section>
        </aside>

        <div class="flex-1">
            <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-surface-container-high">
                <h3 class="font-headline font-bold text-2xl text-primary mb-6">Información de Contacto</h3>
                
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Nombre Completo</label>
                            <input type="text" name="nombre" class="bg-surface-container border-none rounded-lg p-3 focus:ring-2 focus:ring-primary" placeholder="Ej. Juan Pérez" required>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Teléfono / WhatsApp</label>
                            <input type="tel" name="telefono" class="bg-surface-container border-none rounded-lg p-3 focus:ring-2 focus:ring-primary" placeholder="809-000-0000" required>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Tipo de Vehículo</label>
                        <select name="vehiculo" class="bg-surface-container border-none rounded-lg p-3 focus:ring-2 focus:ring-primary">
                            <option>Sedán / Compacto</option>
                            <option>SUV / Jipeta</option>
                            <option>Pick-up / Camioneta</option>
                            <option>Motocicleta</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Mensaje / Detalles Adicionales</label>
                        <textarea name="mensaje" rows="4" class="bg-surface-container border-none rounded-lg p-3 focus:ring-2 focus:ring-primary" placeholder="Cuéntanos más sobre el estado de tu vehículo..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-4 rounded-xl font-headline font-bold text-lg hover:bg-primary-container transition-all active:scale-95 shadow-lg">
                        Confirmar Intención de Reserva
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection --}}

{{-- CODIGO QUE FUNCIONA CON SU CONTROLLER Y ENVIA A LA BASE DE DATOS *SUPUESTAMENTE XD --}}

@extends('template')

@section('content')
<main class="pt-24 pb-20 max-w-7xl mx-auto px-6">
    <div class="mb-12">
        <h1 class="font-headline text-5xl font-extrabold text-primary tracking-tight mb-2">Contacto y Soporte</h1>
        <p class="text-on-surface-variant max-w-2xl text-lg">¿Tienes dudas o prefieres una atención personalizada? Estamos aquí para asesorarte en el cuidado de tu vehículo.</p>
    </div>

    {{-- Mensaje de Éxito --}}
    @if(session('success'))
        <div class="mb-8 p-4 bg-green-100 border border-green-400 text-green-700 rounded-xl flex items-center gap-3">
            <span class="material-symbols-outlined">check_circle</span>
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col lg:flex-row gap-12">
        <aside class="w-full lg:w-64 flex-shrink-0 space-y-6">
            <section class="rounded-xl overflow-hidden bg-primary text-white p-6 relative">
                <div class="relative z-10">
                    <span class="bg-yellow-400 text-blue-950 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-widest">Atención</span>
                    <h4 class="font-headline font-bold mt-2 leading-tight">Servicio a domicilio disponible</h4>
                    <p class="text-xs text-blue-100 mt-2 opacity-80">Consulta disponibilidad en tu zona al agendar.</p>
                </div>
                <div class="absolute -right-4 -bottom-4 opacity-20">
                    <span class="material-symbols-outlined text-7xl" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
                </div>
            </section>

            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100">
                <h5 class="font-bold text-primary mb-3">Vías Rápidas</h5>
                <div class="space-y-4">
                    <a href="#" class="flex items-center gap-3 text-sm text-slate-600 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-lg">call</span>
                        809-XXX-XXXX
                    </a>
                    <a href="#" class="flex items-center gap-3 text-sm text-slate-600 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        info@hydro-precision.com
                    </a>
                </div>
            </div>
        </aside>

        <div class="flex-1">
            <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-100">
                <h3 class="font-headline font-bold text-2xl text-primary mb-6">Envíanos un mensaje</h3>
                
                {{-- Formulario apuntando a la ruta del controlador --}}
                <form action="{{ route('contacto.enviar') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-500 uppercase tracking-wider">Nombre Completo</label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}" class="bg-slate-50 border-none rounded-lg p-3 focus:ring-2 focus:ring-primary" placeholder="Ej. Juan Pérez" required>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-500 uppercase tracking-wider">Teléfono / WhatsApp</label>
                            <input type="tel" name="telefono" value="{{ old('telefono') }}" class="bg-slate-50 border-none rounded-lg p-3 focus:ring-2 focus:ring-primary" placeholder="809-000-0000" required>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-500 uppercase tracking-wider">Tipo de Vehículo</label>
                        <select name="vehiculo" class="bg-slate-50 border-none rounded-lg p-3 focus:ring-2 focus:ring-primary">
                            <option {{ old('vehiculo') == 'Sedán / Compacto' ? 'selected' : '' }}>Sedán / Compacto</option>
                            <option {{ old('vehiculo') == 'SUV / Jipeta' ? 'selected' : '' }}>SUV / Jipeta</option>
                            <option {{ old('vehiculo') == 'Pick-up / Camioneta' ? 'selected' : '' }}>Pick-up / Camioneta</option>
                            <option {{ old('vehiculo') == 'Motocicleta' ? 'selected' : '' }}>Motocicleta</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-500 uppercase tracking-wider">Mensaje / Detalles Adicionales</label>
                        <textarea name="mensaje" rows="4" class="bg-slate-50 border-none rounded-lg p-3 focus:ring-2 focus:ring-primary" placeholder="Cuéntanos más sobre cómo podemos ayudarte...">{{ old('mensaje') }}</textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-4 rounded-xl font-headline font-bold text-lg hover:bg-opacity-90 transition-all active:scale-95 shadow-lg flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">send</span>
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection