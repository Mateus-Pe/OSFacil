<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordens de Serviço - OSFacil</title>
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
        <div class="py-3 px-6 border-b border-slate-100 flex justify-center overflow-visible">
            <img src="{{ assets('img/OSFacil-logo-nobg.png') }}" alt="OSFacil" class="w-20 h-20 object-contain transform scale-[2]">
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
    
    <!-- Main Content -->
    <main class="ml-64 p-8">
        <!-- Header -->
        <div class="mb-8 fade-in flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-semibold text-slate-800 mb-2">Ordens de Serviço</h2>
                <p class="text-slate-500">Gerenciar todas as OS do sistema</p>
            </div>
            <a href="/os" class="inline-flex items-center px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all duration-300 shadow-sm hover:shadow-md">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Nova Ordem de Serviço
            </a>
        </div>
        
        @if(count($Os) > 0)
            <!-- Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 fade-in">
                @foreach($Os as $o)
                <div class="group bg-white rounded-xl shadow-sm border border-slate-100 p-6 hover:shadow-lg hover:border-blue-200 transition-all duration-300 cursor-pointer relative overflow-hidden">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-3 bg-blue-50 rounded-lg">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800">OS #{{ $o['id'] }}</h3>
                                <p class="text-sm text-slate-500">{{ $o['aparelho'] }}</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 text-xs font-medium rounded-full transition-colors
                            {{ $o['status'] == 'Concluído' || $o['status'] == 'finalizada' ? 'bg-emerald-100 text-emerald-700 group-hover:bg-emerald-200' : 
                               ($o['status'] == 'Em Andamento' || $o['status'] == 'em andamento' ? 'bg-blue-100 text-blue-700 group-hover:bg-blue-200' : 'bg-amber-100 text-amber-700 group-hover:bg-amber-200') }}">
                            {{ $o['status'] }}
                        </span>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-slate-600">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="font-medium">Cliente:</span>
                            <span class="ml-1">{{ $o['cliente'] }}</span>
                        </div>
                        
                        @if(isset($o['vendedor']))
                        <div class="flex items-center text-sm text-slate-600">
                            <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="font-medium">Responsável:</span>
                            <span class="ml-1">{{ $o['vendedor'] }}</span>
                        </div>
                        @endif
                    </div>
                    
                    <!-- Floating Action Buttons (appears on hover at bottom right) -->
                    <div class="absolute bottom-4 right-4 flex items-center gap-2 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                        <!-- Edit Button -->
                        <button class="flex items-center justify-center w-10 h-10 bg-blue-500 text-white rounded-lg hover:bg-blue-600 hover:scale-110 transition-all shadow-lg hover:shadow-xl" title="Editar OS">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>
                        
                        <!-- Export PDF Button -->
                        <a href="/os/exportar/{{ $o['id'] }}" 
                           class="flex items-center justify-center w-10 h-10 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 hover:scale-110 transition-all shadow-lg hover:shadow-xl" 
                           title="Exportar PDF"
                           onclick="event.stopPropagation()">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </a>
                        
                        <!-- Delete Button -->
                        <form action="/os/deletar/{{ $o['id'] }}" method="POST" class="inline" onclick="event.stopPropagation()">
                            <button type="submit"
                                onclick="return confirm('Tem certeza que deseja deletar esta OS?')"
                                class="flex items-center justify-center w-10 h-10 bg-red-500 text-white rounded-lg hover:bg-red-600 hover:scale-110 transition-all shadow-lg hover:shadow-xl"
                                title="Deletar OS">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-12 text-center fade-in">
                <svg class="w-16 h-16 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <h3 class="text-lg font-semibold text-slate-800 mb-2">Nenhuma ordem de serviço cadastrada</h3>
                <p class="text-slate-500 mb-6">Comece criando sua primeira OS</p>
                <a href="/os" class="inline-flex items-center px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Criar Primeira OS
                </a>
            </div>
        @endif
        
        <!-- Footer -->
        <footer class="mt-12 text-center text-sm text-slate-400">
            {{ date('Y') }} © OSFacil - Sistema de Gestão de Ordens de Serviço
        </footer>
    </main>
</body>
</html>
