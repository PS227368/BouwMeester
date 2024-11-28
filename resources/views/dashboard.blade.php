<x-app-layout>
    <div class="min-h-screen bg-gray-50">
        <div class="container mx-auto px-4 py-8">
            <!-- Header -->
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold">BouwMeester</h1>
                <h2 class="text-xl">Dashboard</h2>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-3 space-y-8">
                    <!-- Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-semibold mb-4">Aantal Werknemers</h3>
                            <p class="text-3xl font-bold">{{ $employeeCount }}</p>
                        </div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <!-- Additional stats -->
                        </div>
                    </div>

                    <!-- Employee List -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-xl font-semibold mb-4">Lijst met de werknemers</h2>
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="text-left">Naam</th>
                                    <th class="text-left">Beschikbare dagen</th>
                                    <th class="text-left">Certificaat (apparaten)</th>
                                    <th class="text-left">Rol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ implode(', ', json_decode($employee->available_days)) }}</td>
                                    <td>{{ implode(', ', json_decode($employee->certificates)) }}</td>
                                    <td>{{ $employee->role }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Leave Overview -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="font-semibold mb-4">Verlof tot</h3>
                        @foreach($leaveRecords as $record)
                        <div class="flex justify-between items-center py-2">
                            <span class="font-medium">{{ $record->employee_name }}</span>
                            <div class="flex gap-4">
                                <span>{{ $record->end_date->format('d/m/y') }}</span>
                                <span class="text-gray-600">{{ $record->type }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Sick Reports -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="font-semibold mb-4">Ziek Meldingen</h3>
                        @foreach($sickReports as $report)
                        <div class="flex justify-between items-center py-2">
                            <span class="font-medium">{{ $report->employee_name }}</span>
                            <span>{{ $report->start_date->format('d/m/y') }}</span>
                        </div>
                        @endforeach
                    </div>

                    <!-- Admin Controls -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-bold">Admin</h2>
                        <div class="space-y-2">
                            <a href="{{ route('users.index') }}" class="block w-full text-left px-4 py-2 rounded-md border border-gray-300 hover:bg-gray-50">
                                Gebruikers
                            </a>
                            <a href="{{ route('roles.index') }}" class="block w-full text-left px-4 py-2 rounded-md border border-gray-300 hover:bg-gray-50">
                                Rollen
                            </a>
                            <a href="{{ route('employees.create') }}" class="block w-full text-left px-4 py-2 rounded-md border border-gray-300 hover:bg-gray-50">
                                Werknemer toevoegen
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 rounded-md border border-gray-300 hover:bg-gray-50">
                                    Uitloggen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
