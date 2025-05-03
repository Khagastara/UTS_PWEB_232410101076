@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Dashboard</h1>

    <div class="mb-8">
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-blue-800">
                        Selamat Datang, <span class="font-medium">{{ $username }}</span>!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-md p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium">Total Pasien</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold">4</p>
            <p class="text-blue-100 mt-2 text-sm">Rekaman Pasien</p>
        </div>
        <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg shadow-md p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium">Hasil Rekaman Hari Ini</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <p class="text-3xl font-bold">2</p>
            <p class="text-green-100 mt-2 text-sm">Rekaman Pasien</p>
        </div>
        <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg shadow-md p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium">Laporan Rekaman</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            <p class="text-3xl font-bold">12</p>
            <p class="text-purple-100 mt-2 text-sm">Bulan Ini</p>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Patient Activity</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-600">Nama</th>
                        <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-600">Kelamin</th>
                        <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-600">Tanggal Rekaman</th>
                        <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-600">Diagnosis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b text-sm">Nur</td>
                        <td class="py-2 px-4 border-b text-sm">Female</td>
                        <td class="py-2 px-4 border-b text-sm">2025-04-30</td>
                        <td class="py-2 px-4 border-b text-sm">Flu</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="py-2 px-4 border-b text-sm">Adit</td>
                        <td class="py-2 px-4 border-b text-sm">Male</td>
                        <td class="py-2 px-4 border-b text-sm">2025-04-30</td>
                        <td class="py-2 px-4 border-b text-sm">Diare</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="{{ route('pengelolaan') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                Lihat Semua Pasien →
            </a>
        </div>
    </div>
</div>
@endsection
