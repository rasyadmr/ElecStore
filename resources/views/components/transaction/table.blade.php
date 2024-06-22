@props(['transactions'])
<table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400 my-3">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-16 py-3">
                Date
            </th>
            <th scope="col" class="px-6 py-3">
                Total
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Details
            </th>
        </tr>
    </thead>
    <tbody>
        @if ($transactions->isNotEmpty())
            @foreach ($transactions as $transaction)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4">
                        {{ $transaction->created_at->format('d M, Y') }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        Rp {{ $transaction->total }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        @if ($transaction->status === 'success')
                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Success</span>
                        @elseif ($transaction->status === 'pending')
                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                        @elseif ($transaction->status === 'failed')
                            <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Failed</span>
                        @else
                            <span class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-200 dark:text-gray-900">Unknown</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        <x-transaction.table-details :details="$transaction->transactionDetails" :id="$transaction->id"/>
                    </td>
                </tr>
            @endforeach
        @else
        <tr>
            <td colspan="5" class="px-6 py-4 text-center">No transactions from this account!</td>
        </tr>
        @endif
    </tbody>
</table>
{{ $transactions->links() }}