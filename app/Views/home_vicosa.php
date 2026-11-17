<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viçosa Conecta - Conectando a Cidade</title>
    <!-- Tailwind CSS via CDN para estilização rápida e moderna -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <!-- Header / Navbar -->
    <header class="bg-white shadow-sm border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="bg-emerald-600 text-white p-2 rounded-lg font-bold">
                    <i class="fa-solid fa-city"></i>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-900">Viçosa <span class="text-emerald-600">Conecta</span></span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="<?= base_url('servicos') ?>" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition">Ver Serviços</a>
                <a href="<?= base_url('servicos/novo') ?>" class="bg-emerald-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm hover:bg-emerald-700 transition">Cadastrar Ocorrência</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 text-center">
        <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 mb-6 border border-emerald-100">
            <i class="fa-solid fa-bullhorn"></i> Gestão e Participação Cidadã em Viçosa - MG
        </span>
        <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight max-w-3xl mx-auto">
            Aproximando você dos serviços da nossa cidade.
        </h1>
        <p class="mt-6 text-lg text-slate-600 max-w-2xl mx-auto">
            Uma plataforma colaborativa desenvolvida para conectar demandas urbanas, classificados e utilidades públicas de forma rápida, transparente e acessível.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
            <a href="<?= base_url('servicos') ?>" class="inline-flex items-center justify-center px-6 py-3.5 text-base font-medium rounded-xl text-white bg-emerald-600 hover:bg-emerald-700 shadow-md transition">
                <i class="fa-solid fa-list-ul mr-2"></i> Explorar Serviços e Chamados
            </a>
            <a href="<?= base_url('servicos/novo') ?>" class="inline-flex items-center justify-center px-6 py-3.5 text-base font-medium rounded-xl text-slate-700 bg-white hover:bg-slate-50 border border-slate-300 shadow-sm transition">
                <i class="fa-solid fa-plus mr-2"></i> Publicar Novo Serviço
            </a>
        </div>
    </section>

    <!-- Features / Highlights -->
    <section class="bg-white py-16 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-4 text-lg">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-900 mb-2">Rápido e Direto</h3>
                <p class="text-slate-600 text-sm">Cadastre e consulte ocorrências em poucos cliques, mantendo o histórico organizado por categorias e bairros.</p>
            </div>
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-4 text-lg">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-900 mb-2">Segurança Integrada</h3>
                <p class="text-slate-600 text-sm">Estruturado com controle de acesso robusto para garantir a integridade dos dados dos cidadãos e administradores.</p>
            </div>
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-4 text-lg">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-900 mb-2">Foco Local</h3>
                <p class="text-slate-600 text-sm">Desenvolvido sob medida para a realidade do município de Viçosa e região, valorizando a comunidade.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-8 text-center text-sm text-slate-500">
        <p>&copy; 2026 Viçosa Conecta. Desenvolvido com CodeIgniter 4.</p>
    </footer>

</body>
</html>