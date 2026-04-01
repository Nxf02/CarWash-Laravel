@extends('template')

@section('content')
<main class="pt-24 bg-surface">
    <section class="relative px-6 py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center">
            <span class="inline-block py-1 px-4 mb-4 bg-primary-fixed text-on-primary-fixed text-xs font-bold uppercase tracking-widest rounded-full">Exclusividad en Detallado</span>
            <h1 class="font-headline text-5xl md:text-7xl font-extrabold text-primary tracking-tighter mb-6 leading-none">
                Resultados de <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-surface-tint">Precisión</span>
            </h1>
            <p class="max-w-2xl text-lg text-on-surface-variant leading-relaxed mb-10">
                Descubre la maestría detrás de cada acabado. Transformamos vehículos de lujo en obras de arte rodantes mediante procesos técnicos de vanguardia y atención milimétrica.
            </p>
            <div class="w-full h-[400px] md:h-[600px] rounded-2xl overflow-hidden shadow-2xl relative">
                <img alt="Luxury car showcase" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDN0rUb7NRwPy_I5BLNJGLGw0jEf2vTtRTLwccbsEvET6d48y4cykW3T6DaKJ4QDO3rKOO2XEdR2SA08y8S-vodO5OvrZFWZEeaBWEuKEPg1ahgLGsodsJQUcquZojgmBBg--KKOPpGZNlDD-1LUDV66t28hqzuEmQKJCa2JdI3uIQ4y9Z7LBZZaqSv8BuLOtOk5ldyzR2_AwCPQlPeU7huD40-TOkDqsiEIMaxAxXfGG_mfsp_9MjhM0_nkrzX35hQALXnhcBXmA4"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
            </div>
        </div>
    </section>

    <section class="sticky top-[72px] z-40 bg-surface/80 backdrop-blur-md py-6 border-y border-outline-variant/15">
        <div class="max-w-7xl mx-auto px-6 flex flex-wrap justify-center gap-4">
            <button class="px-6 py-2 rounded-full bg-primary text-on-primary font-semibold text-sm transition-all">Todos</button>
            <button class="px-6 py-2 rounded-full bg-white text-on-surface-variant border border-outline-variant/30 font-semibold text-sm hover:bg-primary-fixed transition-all">Exterior</button>
            <button class="px-6 py-2 rounded-full bg-white text-on-surface-variant border border-outline-variant/30 font-semibold text-sm hover:bg-primary-fixed transition-all">Interior</button>
            <button class="px-6 py-2 rounded-full bg-white text-on-surface-variant border border-outline-variant/30 font-semibold text-sm hover:bg-primary-fixed transition-all">Motor</button>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group relative overflow-hidden rounded-xl bg-white shadow-sm border border-outline-variant/10">
                <div class="aspect-[4/5] overflow-hidden">
                    <img alt="Interior Detail" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDG0IQyXUjlGFyA4baOdnYKDPrXmqR-24c18dGSbE5cvXEsb8tB57_eZ3mDx2gguNf4Pz9RhdS9Nknm5wbat1sFEEnSjA3cVTPgygUO6TdS15o-dPCpaxwGoQB5Bv6u0tLFbN3-IpCQN9yPtx4szu3wMekDjJOdryHQCCTwunQAzAwYsHihNyms8cle7lz-tmO8eN5UzMsbDpZzyGnQda6G6TqRO54miAXsqVt2PG9A0admfo_DjcU1W0qQfJyYWleuGBTSAq1T1Fs"/>
                </div>
                <div class="absolute inset-0 bg-primary/80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 text-center">
                    <span class="material-symbols-outlined text-tertiary-fixed text-4xl mb-4">airline_seat_recline_extra</span>
                    <h3 class="font-headline text-xl font-bold text-white mb-2">Restauración de Piel</h3>
                    <p class="text-white/80 text-sm">Tratamiento profundo con nutrientes naturales y protección UV para interiores premium.</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white shadow-sm border border-outline-variant/10">
                <div class="aspect-[4/5] overflow-hidden">
                    <img alt="Engine Detail" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjWubbUXhsv7OH3ZkaCelj-BQscnIpgxViuQA5JVNFriA8Y5XW60SsP7ON6iCR86uugJVA30Qj3OAMhQ1vvN8fBNOmm1crQn-Lry--2cciC1ZPrRbeoT9aiBzCQ1k2t9KVzDRmzVtK21P4MS4JUAYh_g57UikqS66KTBU_K3P9xi4Wu5smMru2mvj99w1Skkxl6E-jzOiIV2nndP0ZWuVclxSMrvQVL1ytzlIkdT9w09EGKqnYMrakdxiFdpBZOgAaz0Bbax8qTXg"/>
                </div>
                <div class="absolute inset-0 bg-primary/80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 text-center">
                    <span class="material-symbols-outlined text-tertiary-fixed text-4xl mb-4">precision_manufacturing</span>
                    <h3 class="font-headline text-xl font-bold text-white mb-2">Detallado de Motor</h3>
                    <p class="text-white/80 text-sm">Limpieza técnica por vapor y acondicionado de mangueras para un look de exhibición.</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white shadow-sm border border-outline-variant/10">
                <div class="aspect-[4/5] overflow-hidden">
                    <img alt="Ceramic Coating" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeJGaB79JUby4rgF-jgUH0fl3nGiwmCo7AjbdgLZKPptKIX_m_EIv8QfNKqYqzGA_jLr6GW_7opKU5xYvJwJmCBl7BDgKvJ8Hh6XCl8_XBQvPH4ysih8298Y14mEDtK6v-rPx3FDcz53wndmH1-yzXtvNi--TMhoTZT8owGmkth2SCgCD9zuyghEjA__MiaIBs3bz1UkPrjnApPT9_xNO_YR7WhYWFvzs7g-2ivCel827IdxKPGV5seb2b07xajCj0gyfYwJ6DUeI"/>
                </div>
                <div class="absolute inset-0 bg-primary/80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-8 text-center">
                    <span class="material-symbols-outlined text-tertiary-fixed text-4xl mb-4">layers</span>
                    <h3 class="font-headline text-xl font-bold text-white mb-2">Ceramic Coating 9H</h3>
                    <p class="text-white/80 text-sm">Protección nanotecnológica con brillo de espejo y repelencia hidrofóbica extrema.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-surface-container-low py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-headline text-4xl font-bold text-primary mb-4">El Impacto Visual</h2>
                <p class="text-on-surface-variant max-w-xl mx-auto">Compara la transformación real tras nuestro proceso de corrección de pintura multi-etapa.</p>
            </div>
            <div class="relative w-full max-w-5xl mx-auto aspect-video rounded-3xl overflow-hidden shadow-2xl group">
                <div class="absolute inset-0 w-1/2 overflow-hidden border-r-4 border-tertiary-fixed z-10">
                    <img alt="Before detailing" class="absolute inset-0 w-[200%] h-full object-cover grayscale brightness-75" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcbdVHYlegJr1WgZZEHOOpXvQcAOyzBaYIhBADKAiBJTYZboQLwZPC5k8PJMTrLmuuF5gsutdB9pkGx_pe_BlptTArPveuuBVC9L-USSoR7kEWc5q5ERD4fiVaP1dOHgdxPcRMKcBTHOG-WIJfkCqKInDYfcN6_PD2Dtm-EspkKzXIXYBf3ZYjtSyQBL6kk-6tAB6dhTOwtzhNxwhnzU-Q5DPIesioCD_q5rj73kLtdBAPzEnWKAjDMsOntfklYwoQciUOyAsnCDM"/>
                    <div class="absolute bottom-6 left-6 bg-black/50 backdrop-blur-sm px-4 py-2 rounded-lg text-white font-bold text-sm tracking-widest uppercase">Antes</div>
                </div>
                <div class="absolute inset-0 w-full overflow-hidden">
                    <img alt="After detailing" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiBPCtnYUXXHvIE5uiOWNyuR7AmukXs0E20Z6ZTc3uFuOsd-WqpM3nbPRrOBVDN6TpBgQDN71ygStNwhMT3IqmVIs9QxGjMQRtQdI_wrtaaKdTr3Us-i24R4LEIGACZnaoDIyK9aHb1kFD3G_iEA6PsZuDFj8QMxeVEJAJ-OeoF_VZN7Cm7_AJCX1SnWezOoMDj7l5jnJOwyDeoamTpK1SDLlb-QN_TU71m6IWe7iP6dInaGN3w80rhXAKJpkO-5yP3cp8eImd7D0"/>
                    <div class="absolute bottom-6 right-6 bg-tertiary-fixed px-4 py-2 rounded-lg text-on-tertiary-fixed font-bold text-sm tracking-widest uppercase">Después</div>
                </div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 w-12 h-12 bg-tertiary-fixed rounded-full shadow-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary font-bold">unfold_more</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 text-center">
        <div class="max-w-4xl mx-auto p-12 bg-primary rounded-[3rem] shadow-2xl relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-tertiary-fixed via-primary to-primary"></div>
            <div class="relative z-10">
                <h2 class="font-headline text-4xl font-bold text-white mb-6">¿Tu auto merece este nivel de cuidado?</h2>
                <p class="text-white/70 text-lg mb-10 max-w-2xl mx-auto">Reserva una inspección técnica hoy mismo y eleva el valor y la estética de tu vehículo.</p>
                <a href="{{ route('contacto') }}" class="inline-block bg-tertiary-fixed hover:bg-tertiary-fixed-dim text-on-tertiary-fixed px-10 py-5 rounded-full font-black text-lg shadow-xl hover:scale-105 transition-all">
                    Agenda tu transformación
                </a>
            </div>
        </div>
    </section>
</main>
@endsection