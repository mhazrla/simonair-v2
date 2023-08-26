<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Waktu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        pH
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Suhu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amonia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TDS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TSS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Salinitas
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $log->created_at }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $log->ph }} pH
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->suhu }} °C
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->amonia }} PPM
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->tds }} PPM
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->tss }} NTU
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->salinitas }} PPT
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="font-medium {{ $log->status === 1 ? 'text-blue-600 dark:text-blue-500' : 'text-red-600 dark:text-red-500' }}">{{ $log->status === 1 ? 'Kualitas Air Baik' : 'Kualitas Air Buruk' }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $logs->links() }}
    </div>

</div>
