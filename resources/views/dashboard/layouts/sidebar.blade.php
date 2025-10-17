<!-- TOPBAR -->
<nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between bg-white shadow-md px-6 py-3">
    <div class="flex items-center">
        <button class="text-gray-600 text-2xl mr-4 xl:hidden" id="toggleSidebar">
            <i class="ri-menu-line"></i>
        </button>
        <span class="text-lg font-semibold text-green-600">Sistem Pendukung Keputusan</span>
    </div>
    <div class="flex items-center space-x-3">
        <i class="ri-user-3-fill text-gray-600 text-xl"></i>
        <div class="relative group">
            <button class="text-sm font-semibold text-gray-700 flex items-center">
                Admin SPK 1
                <i class="ri-arrow-down-s-line ml-1"></i>
            </button>
            <div class="absolute right-0 hidden mt-2 w-40 bg-white border rounded-lg shadow-md group-hover:block">
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">Profil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- SIDEBAR -->
<aside id="sidebar"
    class="max-w-62.5 fixed inset-y-0 mt-16 my-4 ml-0 w-64 -translate-x-full xl:translate-x-0 transition-transform duration-200 bg-white rounded-r-2xl shadow-lg overflow-y-auto z-40">

    <div class="h-19.5">
        <a class="block px-8 py-6 text-sm text-dark" href="#">
            <img src="{{ asset('img/logo.jpg') }}"
                class="inline h-full max-h-12 rounded-full transition-all duration-200 ease-nav-brand" alt="logo" />
            <span class="ml-1 font-semibold">restasi Siswa SMA Negeri 1 Pronojiwo</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <ul class="flex flex-col pl-0 mb-5">

        <!-- Dashboard -->
        <li>
            <a href="{{ route('dashboard') }}"
                class="flex items-center px-4 py-2.5 mx-4 text-sm my-1 rounded-lg hover:bg-green-50 {{ Request::is('dashboard') ? 'bg-green-100 font-semibold text-green-700' : '' }}">
                <i class="ri-home-smile-fill mr-3 text-greenPrimary"></i>
                Dashboard
            </a>
        </li>

        <!-- Data Master -->
        <li class="mt-4">
            <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Master Data</h6>
        </li>

        <li>
            <a href=""
                class="flex items-center px-4 py-2.5 mx-4 text-sm my-1 rounded-lg hover:bg-green-50 {{ Request::is('dashboard/users') ? 'bg-green-100 font-semibold text-green-700' : '' }}">
                <i class="ri-user-settings-fill mr-3 text-greenPrimary"></i>
                Users
            </a>
        </li>
        
        <li>
            <a href="{{ route('objek') }}"
                class="flex items-center px-4 py-2.5 mx-4 text-sm my-1 rounded-lg hover:bg-green-50 {{ Request::is('dashboard/objek') ? 'bg-green-100 font-semibold text-green-700' : '' }}">
                <i class="ri-user-3-fill mr-3 text-greenPrimary"></i>
                Data Siswa
            </a>
        </li>
        <li>
            <a href="{{ route('kriteria') }}"
                class="flex items-center px-4 py-2.5 mx-4 text-sm my-1 rounded-lg hover:bg-green-50 {{ Request::is('dashboard/kriteria') ? 'bg-green-100 font-semibold text-green-700' : '' }}">
                <i class="ri-table-fill mr-3 text-greenPrimary"></i>
                Kriteria
            </a>
        </li>
        <li>
            <a href="{{ route('sub_kriteria') }}"
                class="flex items-center px-4 py-2.5 mx-4 text-sm my-1 rounded-lg hover:bg-green-50 {{ Request::is('dashboard/sub_kriteria') ? 'bg-green-100 font-semibold text-green-700' : '' }}">
                <i class="ri-collage-fill mr-3 text-greenPrimary"></i>
                Sub Kriteria
            </a>
        </li>


        <!-- SPK METHOD -->
        <li class="mt-4">
            <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">SPK Method</h6>
        </li>

        <li class="group relative">
            <button
                class="flex items-center justify-between w-full px-4 py-2.5 mx-4 text-sm rounded-lg hover:bg-green-50 focus:outline-none">
                <span class="flex items-center">
                    <i class="ri-function-line mr-3 text-greenPrimary"></i> Metode AHP
                </span>
                <i class="ri-arrow-down-s-line text-gray-500"></i>
            </button>
            <ul class="hidden group-hover:block pl-10 mt-1 space-y-1">
                <li class="mt-0.5 w-full">
            <a href="{{ route('alternatif') }}" class="{{ Request::is('dashboard/alternatif') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-dark' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                <div class="{{ Request::is('dashboard/alternatif') ? 'bg-gradient-to-tl from-backgroundSecondary to-greenSecondary text-white' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ri-braces-fill text-greenPrimary"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Alternatif</span>
            </a>
        </li>
        <li class="mt-0.5 w-full">
            <a href="{{ route('penilaian') }}" class="{{ Request::is('dashboard/penilaian*') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-dark' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                <div class="{{ Request::is('dashboard/penilaian*') ? 'bg-gradient-to-tl from-backgroundSecondary to-greenSecondary text-white' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ri-survey-fill text-greenPrimary"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Penilaian</span>
            </a>
        </li>
        <li class="mt-0.5 w-full">
            <a href="{{ route('perhitungan') }}" class="{{ Request::is('dashboard/perhitungan') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-dark' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                <div class="{{ Request::is('dashboard/perhitungan') ? 'bg-gradient-to-tl from-backgroundSecondary to-greenSecondary text-white' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ri-calculator-fill text-greenPrimary"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Perhitungan</span>
            </a>
        </li>
            </ul>
        </li>

        <!-- SPK METHOD -->
        <li class="mt-4">
            <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">TOPSIS Method</h6>
        </li>

        <li class="group relative">
            <button
                class="flex items-center justify-between w-full px-4 py-2.5 mx-4 text-sm rounded-lg hover:bg-green-50 focus:outline-none">
                <span class="flex items-center">
                    <i class="ri-function-line mr-3 text-greenPrimary"></i> Metode TOPSIS
                </span>
                <i class="ri-arrow-down-s-line text-gray-500"></i>
            </button>
            <ul class="hidden group-hover:block pl-10 mt-1 space-y-1">
                <li class="mt-0.5 w-full">
            <a href="{{ route('alternatif') }}" class="{{ Request::is('dashboard/alternatif') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-dark' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                <div class="{{ Request::is('dashboard/alternatif') ? 'bg-gradient-to-tl from-backgroundSecondary to-greenSecondary text-white' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ri-braces-fill text-greenPrimary"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Alternatif</span>
            </a>
        </li>
        <li class="mt-0.5 w-full">
            <a href="{{ route('penilaian') }}" class="{{ Request::is('dashboard/penilaian*') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-dark' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                <div class="{{ Request::is('dashboard/penilaian*') ? 'bg-gradient-to-tl from-backgroundSecondary to-greenSecondary text-white' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ri-survey-fill text-greenPrimary"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Penilaian</span>
            </a>
        </li>
        <li class="mt-0.5 w-full">
            <a href="{{ route('perhitungan') }}" class="{{ Request::is('dashboard/perhitungan') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-dark' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                <div class="{{ Request::is('dashboard/perhitungan') ? 'bg-gradient-to-tl from-backgroundSecondary to-greenSecondary text-white' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ri-calculator-fill text-greenPrimary"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Perhitungan</span>
            </a>
        </li>
            </ul>
        </li>

        <!-- Hasil Akhir -->
        <li class="mt-4">
            <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Hasil</h6>
        </li>
        <li>
            <a href="{{ route('hasil_akhir') }}"
                class="flex items-center px-4 py-2.5 mx-4 text-sm my-1 rounded-lg hover:bg-green-50 {{ Request::is('dashboard/hasil_akhir') ? 'bg-green-100 font-semibold text-green-700' : '' }}">
                <i class="ri-bar-chart-2-fill mr-3 text-greenPrimary"></i>
                Hasil Akhir
            </a>
        </li>
    </ul>
</aside>

<!-- Script Sidebar -->
<script>
    document.getElementById('toggleSidebar').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    });
</script>
