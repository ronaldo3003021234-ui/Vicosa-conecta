<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viçosa Conecta - Início</title>
    <!-- Tailwind CSS para estilização rápida -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 text-slate-800 font-sans">

    <!-- Navegação -->
    <nav class="bg-white shadow-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="text-emerald-600 text-xl font-bold"><i class="fa-solid fa-city"></i> Viçosa Conecta</span>
            </div>
            <div>
                <a href="<?= base_url('servicos') ?>" class="bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-emerald-700 transition">Ver Serviços</a>
            </div>
        </div>
    </nav>

    <!-- Banner Principal (Hero) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">
            Conectando a comunidade de <span class="text-emerald-600">Viçosa</span>
        </h1>
        <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">
            Plataforma colaborativa para gestão de demandas urbanas, classificados e utilidades públicas do município.
        </p>
        <div class="mt-8 flex justify-center gap-4">
            <a href="<?= base_url('servicos') ?>" class="px-6 py-3 bg-emerald-600 text-white font-medium rounded-xl shadow-md hover:bg-emerald-700 transition">
                Acessar Painel de Serviços
            </a>
            <a href="<?= base_url('servicos/novo') ?>" class="px-6 py-3 bg-white text-slate-700 border border-slate-300 font-medium rounded-xl shadow-sm hover:bg-slate-50 transition">
                Cadastrar Ocorrência
            </a>
        </div>
    </div>

</body>
</html>