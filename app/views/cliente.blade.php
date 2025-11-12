<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente - OSFacil</title>
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
            
            <a href="/cliente/listar" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg bg-slate-100 text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="font-medium text-sm">Clientes</span>
            </a>
            
            <a href="/vendedor/listar" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="text-sm">Vendedores</span>
            </a>
            
            <a href="/os/listar" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="text-sm">Ordens de Serviço</span>
            </a>
        </nav>
    </aside>
    
    <!-- Floating Back Button -->
    <a href="/cliente/listar" class="fixed top-6 right-8 z-50 inline-flex items-center px-4 py-2.5 bg-white text-slate-700 rounded-lg hover:bg-slate-50 transition-all duration-300 shadow-lg hover:shadow-xl border border-slate-200 group">
        <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        <span class="font-medium text-sm">Voltar</span>
    </a>
    
    <!-- Main Content -->
    <main class="ml-64 p-8">
        <!-- Header -->
        <div class="mb-8 fade-in">
            <h2 class="text-3xl font-semibold text-slate-800 mb-2">Novo Cliente</h2>
            <p class="text-slate-500">Preencha as informações do cliente</p>
        </div>
        
        <!-- Form -->
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-sm border border-slate-100 p-8 fade-in">
            <form action="/cliente/salvar" method="POST" class="space-y-6">
                <!-- Nome -->
                <div>
                    <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Nome Completo <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input type="text" name="nome" required
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all outline-none"
                        placeholder="Ex: João Silva">
                </div>

                <!-- Telefone -->
                <div>
                    <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Telefone / WhatsApp <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input type="text" name="telefone" required
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all outline-none"
                        placeholder="Ex: (15) 99888-7766">
                </div>

                <!-- Email -->
                <div>
                    <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        E-mail
                    </label>
                    <input type="email" name="email"
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all outline-none"
                        placeholder="Ex: joao@email.com">
                </div>

                <!-- Endereço -->
                <div>
                    <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Endereço
                    </label>
                    <input type="text" name="endereco"
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all outline-none"
                        placeholder="Rua, número, bairro">
                </div>

                <!-- Observações -->
                <div>
                    <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                        </svg>
                        Observações
                    </label>
                    <textarea name="observacoes" rows="4"
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all outline-none resize-none"
                        placeholder="Informações adicionais sobre o cliente..."></textarea>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end pt-6 border-t border-slate-100">
                    <button type="submit"
                        class="inline-flex items-center px-8 py-3 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 transition-all duration-300 shadow-sm hover:shadow-md font-medium">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Salvar Cliente
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
