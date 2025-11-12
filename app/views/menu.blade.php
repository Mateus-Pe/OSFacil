<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', 'OSFacil') }} - Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ assets('img/favicon-32x32.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .sidebar-link {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .sidebar-link:hover {
            transform: translateX(4px);
        }
        
        .stat-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stat-card:hover {
            transform: translateY(-4px);
        }
        
        .fade-in {
            opacity: 0;
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        .fade-in-delay {
            opacity: 0;
            animation: fadeIn 0.6s ease-out 0.1s forwards;
        }
        
        @keyframes fadeIn {
            from { 
                opacity: 0; 
                transform: translateY(20px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-white to-slate-50 min-h-screen">
    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 h-full w-64 bg-white border-r border-slate-200 shadow-sm">
        <!-- Logo -->
        <div class="p-6 border-b border-slate-100">
            <div class="flex items-center space-x-3">
                <img src="{{ assets('img/OSFacil-logo-nobg.png') }}" alt="OSFacil" class="w-10 h-10 object-contain">
                <div>
                    <h1 class="text-lg font-semibold text-slate-800">OSFacil</h1>
                    <p class="text-xs text-slate-500">Sistema de OS</p>
                </div>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="p-4 space-y-1">
            <a href="/" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg bg-slate-100 text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="font-medium text-sm">Dashboard</span>
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
            
            <a href="/os/listar" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="text-sm">Ordens de Serviço</span>
            </a>
        </nav>
    </aside>
    
    <!-- Main Content -->
    <main class="ml-64 p-8">
        <!-- Header -->
        <header class="mb-8 fade-in">
            <h2 class="text-3xl font-semibold text-slate-800 mb-2">Dashboard</h2>
            <p class="text-slate-500">Visão geral do sistema</p>
        </header>
        
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total OS Card -->
            <div class="stat-card bg-white rounded-xl shadow-sm border border-slate-100 p-6 fade-in-delay" style="animation-delay: 0.1s">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-50 rounded-lg">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-slate-500 bg-slate-50 px-2 py-1 rounded">Total</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-1">{{ $totalOS ?? '0' }}</h3>
                <p class="text-sm text-slate-500">Ordens de Serviço</p>
            </div>
            
            <!-- OS Pendentes Card -->
            <div class="stat-card bg-white rounded-xl shadow-sm border border-slate-100 p-6 fade-in-delay" style="animation-delay: 0.2s">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-amber-50 rounded-lg">
                        <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-amber-600 bg-amber-50 px-2 py-1 rounded">Atenção</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-1">{{ $osPendentes ?? '0' }}</h3>
                <p class="text-sm text-slate-500">OS Pendentes</p>
            </div>
            
            <!-- Clientes Card -->
            <div class="stat-card bg-white rounded-xl shadow-sm border border-slate-100 p-6 fade-in-delay" style="animation-delay: 0.3s">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-emerald-50 rounded-lg">
                        <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-slate-500 bg-slate-50 px-2 py-1 rounded">Ativos</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-1">{{ $totalClientes ?? '0' }}</h3>
                <p class="text-sm text-slate-500">Clientes Cadastrados</p>
            </div>
            
            <!-- Vendedores Card -->
            <div class="stat-card bg-white rounded-xl shadow-sm border border-slate-100 p-6 fade-in-delay" style="animation-delay: 0.4s">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-violet-50 rounded-lg">
                        <svg class="w-6 h-6 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-slate-500 bg-slate-50 px-2 py-1 rounded">Equipe</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-1">{{ $totalVendedores ?? '0' }}</h3>
                <p class="text-sm text-slate-500">Vendedores Ativos</p>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <a href="/os/listar" class="group bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-sm border border-blue-100 p-6 hover:shadow-md transition-all duration-300 fade-in-delay" style="animation-delay: 0.5s">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-blue-500 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800 group-hover:text-blue-600 transition-colors">Ordens de Serviço</h3>
                        <p class="text-sm text-slate-500">Gerenciar todas as OS</p>
                    </div>
                </div>
            </a>
            
            <a href="/cliente/listar" class="group bg-gradient-to-br from-emerald-50 to-white rounded-xl shadow-sm border border-emerald-100 p-6 hover:shadow-md transition-all duration-300 fade-in-delay" style="animation-delay: 0.6s">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-emerald-500 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800 group-hover:text-emerald-600 transition-colors">Clientes</h3>
                        <p class="text-sm text-slate-500">Gerenciar clientes</p>
                    </div>
                </div>
            </a>
            
            <a href="/vendedor/listar" class="group bg-gradient-to-br from-violet-50 to-white rounded-xl shadow-sm border border-violet-100 p-6 hover:shadow-md transition-all duration-300 fade-in-delay" style="animation-delay: 0.7s">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-violet-500 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">Vendedores</h3>
                        <p class="text-sm text-slate-500">Gerenciar equipe</p>
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Recent OS Section -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 fade-in-delay" style="animation-delay: 0.8s">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-800">Ordens de Serviço Recentes</h3>
                <a href="/os/listar" class="text-sm text-blue-500 hover:text-blue-600 font-medium transition-colors">Ver todas →</a>
            </div>
            
            @if(isset($recentOS) && count($recentOS) > 0)
                <div class="space-y-3">
                    @foreach($recentOS as $os)
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition-colors">
                        <div class="flex items-center space-x-4">
                            <div class="p-2 bg-white rounded-lg">
                                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-slate-800">OS #{{ $os['id'] }}</p>
                                <p class="text-sm text-slate-500">{{ $os['cliente'] }} • {{ $os['aparelho'] }}</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 text-xs font-medium rounded-full 
                            {{ $os['status'] == 'Concluído' ? 'bg-emerald-100 text-emerald-700' : 
                               ($os['status'] == 'Em Andamento' ? 'bg-blue-100 text-blue-700' : 'bg-amber-100 text-amber-700') }}">
                            {{ $os['status'] }}
                        </span>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <p class="text-slate-500 mb-4">Nenhuma ordem de serviço cadastrada</p>
                    <a href="/os" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Criar primeira OS
                    </a>
                </div>
            @endif
        </div>
        
        <!-- Footer -->
        <footer class="mt-12 text-center text-sm text-slate-400">
            {{ date('Y') }} © OSFacil - Sistema de Gestão de Ordens de Serviço
        </footer>
    </main>
</body>
</html>
