<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Ordem de Serviço - OSFacil</title>
    <link rel="icon" type="image/x-icon" href="{{ assets('img/favicon-32x32.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .sidebar-link { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .sidebar-link:hover { transform: translateX(4px); }
        .fade-in { animation: fadeIn 0.6s ease-in; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-white to-slate-50 min-h-screen">
    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 h-full w-64 bg-white border-r border-slate-200 shadow-sm">
        <div class="p-6 border-b border-slate-100">
            <div class="flex items-center space-x-3">
                <img src="{{ assets('img/OSFacil-logo-nobg.png') }}" alt="OSFacil" class="w-10 h-10 object-contain">
                <div>
                    <h1 class="text-lg font-semibold text-slate-800">OSFacil</h1>
                    <p class="text-xs text-slate-500">Sistema de OS</p>
                </div>
            </div>
        </div>
        
        <nav class="p-4 space-y-1">
            <a href="/" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="text-sm">Dashboard</span>
            </a>
            
            <div class="pt-4 pb-2 px-4">
                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Menu</p>
            </div>
            
            <a href="/cliente/listar" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="text-sm">Clientes</span>
            </a>
            
            <a href="/vendedor/listar" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="text-sm">Vendedores</span>
            </a>
            
            <a href="/os/listar" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg bg-slate-100 text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="font-medium text-sm">Ordens de Serviço</span>
            </a>
        </nav>
    </aside>
    
    <!-- Floating Back Button -->
    <a href="/os/listar" class="fixed top-6 right-8 z-50 inline-flex items-center px-4 py-2.5 bg-white text-slate-700 rounded-lg hover:bg-slate-50 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-200 group">
        <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        <span class="font-medium text-sm">Voltar</span>
    </a>
    
    <!-- Main Content -->
    <main class="ml-64 p-8">
        <!-- Header -->
        <div class="mb-8 fade-in">
            <h2 class="text-3xl font-semibold text-slate-800 mb-2">Nova Ordem de Serviço</h2>
            <p class="text-slate-500">Registre uma nova ordem de serviço</p>
        </div>
        
        <!-- Form -->
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-sm border border-slate-100 p-8 fade-in">
            <form action="/os/salvar" method="POST" class="space-y-6">
                <!-- Cliente e Vendedor -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Cliente <span class="text-red-500 ml-1">*</span>
                        </label>
                        <select name="cliente" required
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none bg-white">
                            <option value="">Selecione o cliente...</option>
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente['id'] }}">{{ $cliente['nome'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Vendedor Responsável <span class="text-red-500 ml-1">*</span>
                        </label>
                        <select name="vendedor" required
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none bg-white">
                            <option value="">Selecione o vendedor...</option>
                            @foreach($vendedores as $vendedor)
                                <option value="{{ $vendedor['id'] }}">{{ $vendedor['nome'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Contato e Aparelho -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Contato <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input type="text" name="contato" required
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none"
                            placeholder="(15) 98877-6655">
                    </div>

                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                            Aparelho <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input type="text" name="aparelho" required
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none"
                            placeholder="Ex: Samsung Galaxy A30">
                    </div>
                </div>

                <!-- Problema Relatado -->
                <div>
                    <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Problema Relatado <span class="text-red-500 ml-1">*</span>
                    </label>
                    <textarea name="problema" rows="3" required
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none resize-none"
                        placeholder="Descreva o problema relatado pelo cliente..."></textarea>
                </div>

                <!-- Serviço Executado -->
                <div>
                    <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Serviço a Realizar
                    </label>
                    <textarea name="servico" rows="3"
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none resize-none"
                        placeholder="Descreva o serviço que será executado..."></textarea>
                </div>

                <!-- Valor e Status -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Valor Total (R$)
                        </label>
                        <input type="number" name="valor" step="0.01" min="0"
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none"
                            placeholder="250.00">
                    </div>

                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                            Status <span class="text-red-500 ml-1">*</span>
                        </label>
                        <select name="status" required
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none bg-white">
                            <option value="">Selecione...</option>
                            <option value="aberta">Aberta</option>
                            <option value="em andamento">Em Andamento</option>
                            <option value="finalizada">Finalizada</option>
                            <option value="cancelada">Cancelada</option>
                        </select>
                    </div>
                </div>

                <!-- Datas -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Data de Entrada <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input type="date" name="data_entrada" required
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none">
                    </div>

                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Data de Saída Prevista
                        </label>
                        <input type="date" name="data_saida"
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all outline-none">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end pt-6 border-t border-slate-100">
                    <button type="submit"
                        class="inline-flex items-center px-8 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all duration-300 shadow-sm hover:shadow-md font-medium">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Criar Ordem de Serviço
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Footer -->
        <footer class="mt-12 text-center text-sm text-slate-400">
            {{ date('Y') }} © OSFacil - Sistema de Gestão de Ordens de Serviço
        </footer>
    </main>
</body>
</html>
