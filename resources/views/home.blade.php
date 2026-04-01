@extends('template')
@section('content')
    <section class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-primary">
        <div class="absolute inset-0 opacity-40">
            <img class="w-full h-full object-cover"
                data-alt="Close-up of a high-end luxury black car being covered in thick white snow foam wash at a professional detailing studio"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuChqzRVbK7_-4ydJdwPh2Qg_3n8-a9jCXYva5mCu-ltYUAyqLGKi8qoCxakUP0UKgRhQTtBjsQW-D9cpfYS2mxopy_q-K9FLbOMmSKdNOuYjdPnf5jUUPEA8YdAsTjIGEISz4JzqXSRIdyw42C_RFz-O9g-Da_OH54rQCD5t0AZ_QA_Xl7gXd78MtNbzwebT9qmhyB5InQgOFEa-DywV9gsrtPzkKhPBMU4uke_ebYEUC61TI3dLS6PAwLFKEhYLh5Ia-OXtFSsxKs" />
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/80 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <h1 class="font-headline text-5xl md:text-7xl font-extrabold text-white leading-tight tracking-tight">
                    Deja tu auto <br /><span class="text-tertiary-fixed">como nuevo</span>
                </h1>
                <p class="text-xl text-primary-fixed max-w-lg leading-relaxed">
                    Experimenta la precisión del detallado automotriz de alta gama. Tecnología hidrofóbica y cuidado
                    artesanal para el activo que más valoras.
                </p>
                <div class="flex flex-wrap gap-4">
{{--                     <button
                        class="shimmer-btn text-on-tertiary-fixed font-headline font-bold px-8 py-4 rounded-full text-lg shadow-xl">
                        Reserva ahora
                    </button> --}}
                    <a href="{{ route('booking') }}"
                        class="shimmer-btn text-on-tertiary-fixed font-headline font-bold px-6 py-5 rounded-full scale-95 active:scale-90 transition-transform inline-block text-center">
                        Reservar cita
                    </a>

                    <a class="border border-white/20 text-white font-headline font-bold px-8 py-4 rounded-full text-lg hover:bg-white/10 transition-all backdrop-blur-sm" href="{{ route('servicios') }}">Ver servicios</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Servicios Section (Bento Grid) -->
    <section class="py-24 px-6 max-w-7xl mx-auto" id="servicios">
        <div class="text-center mb-16">
            <h2 class="font-headline text-4xl font-extrabold text-primary mb-4">Nuestros Servicios</h2>
            <p class="text-secondary max-w-2xl mx-auto">Soluciones de limpieza de alta precisión adaptadas a las
                necesidades específicas de tu vehículo.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($servicios as $servicio)
                <div
                    class="md:col-span-1 p-8 rounded-xl bg-surface-container-low border-b-4 border-transparent hover:border-tertiary transition-all group bento-item">
                    <div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">local_car_wash</span>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-2">{{ $servicio->nombre }}</h3>
                    <p class="text-on-surface-variant mb-6">{{ $servicio->descripcion }}</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-3xl font-extrabold text-primary">${{ $servicio->precio }}</span>
                        <span class="text-secondary text-sm">/ sesión</span>
                    </div>
                </div>
            @endforeach
            <!-- Lavado Básico -->

            {{-- <!-- Lavado Premium -->
            <div
                class="md:col-span-1 p-8 rounded-xl bg-primary text-white shadow-2xl scale-105 z-10 bento-item relative overflow-hidden">
                <div
                    class="absolute top-4 right-4 bg-tertiary text-on-tertiary text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest">
                    Recomendado</div>
                <div
                    class="w-12 h-12 rounded-lg bg-tertiary-fixed flex items-center justify-center mb-6 text-on-tertiary-fixed">
                    <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">stars</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-2">Lavado premium</h3>
                <p class="text-primary-fixed/80 mb-6">Protección completa. Cera líquida y tratamiento de rines
                    especializado.</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-extrabold text-tertiary-fixed">$25</span>
                    <span class="text-primary-fixed/60 text-sm">/ sesión</span>
                </div>
            </div>
            <!-- Detallado Completo -->
            <div
                class="md:col-span-1 p-8 rounded-xl bg-surface-container-low border-b-4 border-transparent hover:border-tertiary transition-all group bento-item">
                <div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center mb-6 text-primary">
                    <span class="material-symbols-outlined text-3xl">minor_crash</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-2">Detallado completo</h3>
                <p class="text-on-surface-variant mb-6">Interiores y exteriores. Restauración profunda de plásticos y
                    tapicería.</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-extrabold text-primary">$60</span>
                    <span class="text-secondary text-sm">/ sesión</span>
                </div>
            </div>
            <!-- Lavado de Motor -->
            <div
                class="md:col-span-3 p-8 rounded-xl bg-surface-container-high flex flex-col md:flex-row items-center gap-8 bento-item">
                <div class="flex-1">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-3xl">earth_engine</span>
                        </div>
                        <h3 class="font-headline text-2xl font-bold">Lavado de motor</h3>
                    </div>
                    <p class="text-on-surface-variant max-w-xl">Seguro y profesional. Utilizamos productos dieléctricos
                        para garantizar la integridad de los componentes electrónicos de tu motor.</p>
                </div>
                <div class="text-right">
                    <div class="flex items-baseline gap-2 justify-end mb-4">
                        <span class="text-4xl font-extrabold text-primary">$35</span>
                    </div>
                    <button
                        class="bg-primary text-white font-headline font-bold px-8 py-3 rounded-lg hover:bg-primary-container transition-colors">Solicitar</button>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Beneficios Section -->
    <section class="bg-surface-container py-24 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 text-center">
            <div class="space-y-4">
                <span class="material-symbols-outlined text-5xl text-primary"
                    style="font-variation-settings: 'FILL' 1;">bolt</span>
                <h4 class="font-headline font-bold text-xl">Rapidez</h4>
                <p class="text-on-surface-variant">Optimizamos tiempos sin sacrificar ni un ápice de calidad.</p>
            </div>
            <div class="space-y-4">
                <span class="material-symbols-outlined text-5xl text-primary"
                    style="font-variation-settings: 'FILL' 1;">verified</span>
                <h4 class="font-headline font-bold text-xl">Calidad garantizada</h4>
                <p class="text-on-surface-variant">Si no estás satisfecho con el resultado, lo lavamos de nuevo gratis.
                </p>
            </div>
            <div class="space-y-4">
                <span class="material-symbols-outlined text-5xl text-primary"
                    style="font-variation-settings: 'FILL' 1;">eco</span>
                <h4 class="font-headline font-bold text-xl">Productos ecológicos</h4>
                <p class="text-on-surface-variant">Cuidamos tu auto y el planeta con químicos biodegradables.</p>
            </div>
            <div class="space-y-4">
                <span class="material-symbols-outlined text-5xl text-primary"
                    style="font-variation-settings: 'FILL' 1;">badge</span>
                <h4 class="font-headline font-bold text-xl">Atención profesional</h4>
                <p class="text-on-surface-variant">Personal certificado en las últimas técnicas de detallado.</p>
            </div>
        </div>
    </section>
    <!-- Galería Section (Asymmetric Grid) -->
    <section class="py-24 px-6 max-w-7xl mx-auto" id="galeria">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <h2 class="font-headline text-4xl font-extrabold text-primary mb-2">Galería de Resultados</h2>
                <p class="text-secondary">Transformaciones reales realizadas en nuestro centro.</p>
            </div>
            <div class="flex gap-2">
                <button
                    class="p-2 rounded-full border border-outline-variant hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button
                    class="p-2 rounded-full border border-outline-variant hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-4 h-[600px]">
            <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-xl group">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    data-alt="Side by side comparison of a dusty blue sport car wheel next to a pristine polished glossy chrome wheel"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-fKw-oh26tCN6i1_HoQoArbx2lOJNtJUt7WyaPcEiiyTAAXXVIIl1OpMI3Cm5T3g_wnEj3jeqmHwSU6MT_0C0Ww80ToXW7ENfJEo1Mg3PldHeiz_uGdbyZKvhNibtmNSAP7fM8EUldxh0AnAhH2iN_juZl-UT8KWCsKVO_5mG0KCwd-A7Xbuq_4S9YCYdHfBPRbQbZ6Sl0UupieZKCvzf6XQE63fG4TgB8p4WZoE-SKbslgmKw6Ezd4wG0jKPBud0kAWG7TB5EQU" />
                <div
                    class="absolute bottom-4 left-4 bg-black/50 backdrop-blur-md text-white px-4 py-2 rounded-lg text-sm font-bold">
                    Antes &amp; Después</div>
            </div>
            <div class="md:col-span-1 md:row-span-1 relative overflow-hidden rounded-xl group">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    data-alt="Interior of a luxury vehicle showing deep cleaned leather seats and dust-free dashboard with a satin finish"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBX5NcC4EJT__EHP-GJUM5L_DCtMZS5oBO5qcborg2erCqaZKJNkMzSPBs95Ifoonzi1kcnTeiQAcAdCW-SmXWKbKvM27Pv6rKDNBp2lTm5y1of2RmFxRfi_U3jea7dCvywqH5Hn3ClZQcu98GrlXuvUYG8BMMheHJsKPDcM6-xBe666p8JtcCNypxROWm7HqfjGrKHwdPkc_r3J4n6864FzcCU0filnPPcJBQGGG5c2uC4t0cUTQQBim8nxH7XJ4XRDz66HP7wVpU" />
            </div>
            <div class="md:col-span-1 md:row-span-2 relative overflow-hidden rounded-xl group">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    data-alt="Extreme close-up of water beading on a freshly waxed red car hood reflecting light and clouds"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSNinTfiHYfHWVTqSiq-VTR-tvDfLaJHeB0nReKzjnVjfZNc6AUFTE-ApHpncCHAnbBpb21g5LYba0uFinwkWFoD7KEJP9Wki6RVn5gYv_b1yhULJxJV4n7LI8HNjqFHntqqwozsg9VRj8kQlSd9IwbmfTiV13ZLnjGabIsLiS-HFiS1FFlEzJ84NTWU6wXleVUgA6MG6xCDuLTc_aMs7kFWbUFBxayvDu46udjoGh-7QXjBAdlKkStb8ksx8Xyj5OZ2xI0mtkcO8" />
            </div>
            <div class="md:col-span-1 md:row-span-1 relative overflow-hidden rounded-xl group">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    data-alt="Detailer carefully using a small brush on the emblems of a high-end luxury vehicle"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5RBKK-jN1_DDj-Xh2lUFU8MNFr1JfHKlFa72ztRzViJ4zpjrShL8inSnuUAiA50khBeXFV3UbNCYjxHKBzKIqZDz_YoEsutzskjg0qm1MyjXtfuPyT-_jlmK5F8UxAJWDXh_ptYV_2OKHS7DWs9TClIQIvRMNf9pJ-9ucAp8W6BKfgsFst1zxd68MRx257HBH0HwS7ekC0Y9fD3zbrsgICACmcOKNfOk5Zjzd_gG8LFDqeakSkUJlmSA57Hx5VEo3Wj5XopRRouA" />
            </div>
        </div>
    </section>
    <!-- Testimonios Section -->
    <section class="bg-primary py-24 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-headline text-4xl font-extrabold text-white text-center mb-16">Lo que dicen nuestros
                clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-primary-container p-8 rounded-2xl relative">
                    <span
                        class="material-symbols-outlined text-tertiary-fixed text-4xl absolute -top-4 -left-4 bg-primary p-2 rounded-full">format_quote</span>
                    <p class="text-primary-fixed italic mb-6">"El nivel de detalle es increíble. Mi coche no se veía
                        así ni cuando salió del concesionario. Totalmente recomendado."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-400 overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Portrait of a satisfied male customer smiling"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEAyfts8XSkBtbgQUezGEllX_-pcjjv143KpMJR1zBIxUwkj7xOdJm2SYvchUofXC2U8fyi1Xu-ygo_xwdGrVR-XYBdaZq0CqgMCP2qbf0RTA8IkvOEQp_ivJ8sdk_W5iYuVNM--TIQJyA02hhyKW6tsfZNHtuR4SEA2X-HlwoC0TsM6QiV2FLgKCb0mogvM1lzmUEQ9I5aYSl7JBNH2D9gw9umzndQrUMw15Cl2z-LXcOBiXbwxC5kvXtTGA58lu7dLtMjbI5X84" />
                        </div>
                        <div>
                            <p class="text-white font-bold">Ricardo Martínez</p>
                            <div class="flex text-tertiary-fixed">
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary-container p-8 rounded-2xl relative">
                    <p class="text-primary-fixed italic mb-6 text-lg font-medium">"El servicio a domicilio fue puntual
                        y los productos que usan huelen de maravilla. Mi SUV quedó impecable."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-400 overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Portrait of a smiling professional woman"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4vve8XW1XayBs8puTIrg9yRr26s3mVTWagip0Y4cSTiCQyZoEAZxyHFOqtxQg-12Jb6FygFHjQ77WXl_rp2NPxHc_64Uu6JJg6rNTcpjuuxjEOx0S6GW5kVqKePQJahWmci9ruhobk_n8qPg9o1sJBCgIpPjz4cxKVGsmrnFfcnciWNCor7AvwCGznqGgLyVaKWt870q6xq0O0mKCOLPt3j5R4tC0CyCP-DgA9gA8h-eFhgf92EFJ4wqmdkNjR9ljb04t6lAampU" />
                        </div>
                        <div>
                            <p class="text-white font-bold">Elena Valencia</p>
                            <div class="flex text-tertiary-fixed">
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary-container p-8 rounded-2xl relative">
                    <p class="text-primary-fixed italic mb-6">"Excelente trato y profesionalismo. Se nota que aman lo
                        que hacen. El lavado de motor fue muy profesional."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-400 overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Close up portrait of a male car enthusiast"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCw7f2j_ayKlefOQ17aJ9ULokpc2Oomx61Mf5IX6sytP_TNi4c6cI0tE43zukDv-t3AP84gXJdDcvhXsJNOrTtbrUz3SW7xDhrewmQXvZpd33UJ48t69hmSIiL3p8NPBGG4yEokPPI6mYntId2oedANIHCneujHeiTLa8xgBQ73yl2-8EpGR-D2FsRLEQBFKNeEiRfNyRsd1a77uhZugwYHj1K21voVpOlnwzSnlNcIu-dL9P89ZT1Vg_fnPqb3dZW0Xdd8SCxulMU" />
                        </div>
                        <div>
                            <p class="text-white font-bold">Carlos Ruiz</p>
                            <div class="flex text-tertiary-fixed">
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacto Section -->
    <section class="py-24 px-6 max-w-7xl mx-auto" id="contacto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div>
                <h2 class="font-headline text-4xl font-extrabold text-primary mb-6">Contáctanos</h2>
                <p class="text-on-surface-variant mb-8 leading-relaxed">¿Tienes alguna duda o quieres agendar un
                    servicio especial? Estamos aquí para ayudarte a que tu auto luzca impecable.</p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="p-3 rounded-lg bg-surface-container-high text-primary">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <p class="font-bold">Dirección física</p>
                            <p class="text-on-surface-variant">Av. de la Innovación 452, Ciudad de México</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="p-3 rounded-lg bg-surface-container-high text-primary">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div>
                            <p class="font-bold">Teléfono</p>
                            <p class="text-on-surface-variant">+52 55 1234 5678</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="p-3 rounded-lg bg-surface-container-high text-primary">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <p class="font-bold">Correo electrónico</p>
                            <p class="text-on-surface-variant">info@hydro-precision.com</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 rounded-2xl overflow-hidden h-64 shadow-inner grayscale contrast-125">
                    <img class="w-full h-full object-cover"
                        data-alt="Modern minimalist map of a city area with simplified roads and clean typography"
                        data-location="Mexico City"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnSXari_JPdxJVPgHERNg7IAUM48oqzwGv6b0Q0gOfdaTgZCpeFks4KE-alwbgmfxEnT85mUbcW0QPOkUqVjiJsHNKxJWRONnuqLe7tCbfAvCL9IhVQoXUSbT8q5CKmV-d11XbdPgwpeyOig8jgh1yM_QHs_N2dPQnHcW25LkE4YeB5wn-xKkSFH3QOVPSRdzpDFcoxTMR7P-wxcrmgNCitSi19LWxBsD7Le6kS1Q_3PYXtNuncfaTYV_ldkM6eD5sw7xth0k-b2A" />
                </div>
            </div>
            <div class="bg-surface-container-lowest p-8 md:p-12 rounded-3xl shadow-[0_20px_40px_rgba(0,30,64,0.06)]">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-primary ml-1">Nombre completo</label>
                            <input
                                class="w-full bg-surface-container-highest border-none rounded px-4 py-3 focus:ring-2 focus:ring-primary-fixed transition-all"
                                placeholder="Tu nombre" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-primary ml-1">Teléfono</label>
                            <input
                                class="w-full bg-surface-container-highest border-none rounded px-4 py-3 focus:ring-2 focus:ring-primary-fixed transition-all"
                                placeholder="55 0000 0000" type="tel" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-primary ml-1">Email</label>
                        <input
                            class="w-full bg-surface-container-highest border-none rounded px-4 py-3 focus:ring-2 focus:ring-primary-fixed transition-all"
                            placeholder="correo@ejemplo.com" type="email" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-primary ml-1">Mensaje</label>
                        <textarea
                            class="w-full bg-surface-container-highest border-none rounded px-4 py-3 focus:ring-2 focus:ring-primary-fixed transition-all resize-none"
                            placeholder="¿En qué podemos ayudarte?" rows="4"></textarea>
                    </div>
                    <button
                        class="w-full bg-primary text-white font-headline font-bold py-4 rounded-lg hover:bg-primary-container transition-all flex items-center justify-center gap-2"
                        type="submit">
                        Enviar mensaje
                        <span class="material-symbols-outlined">send</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- WhatsApp Floating Button -->
    <a class="fixed bottom-8 right-8 z-[100] bg-[#25D366] text-white p-4 rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform active:scale-95"
        href="https://wa.me/1234567890" target="_blank">
        <svg fill="currentColor" height="32" viewbox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.187-2.59-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.748-2.874-2.533-2.961-2.648-.087-.116-.708-.941-.708-1.798 0-.856.448-1.277.607-1.45.159-.174.347-.217.463-.217.116 0 .232.001.332.005.109.004.254-.041.398.305.144.347.491 1.199.535 1.286.044.087.073.188.014.304-.058.116-.087.188-.174.289-.087.101-.182.226-.26.304-.087.087-.177.183-.076.357.101.174.449.741.964 1.201.663.591 1.221.774 1.394.86.174.088.275.073.376-.044.101-.116.434-.506.55-.68.116-.174.232-.145.391-.087.159.058 1.012.477 1.185.564.174.087.289.13.332.202.045.072.045.419-.099.824z">
            </path>
        </svg>
    </a>
@endsection
