<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Penjualan</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="h-full">
    <x-sidebar></x-sidebar>
    <x-nav-bar></x-nav-bar>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg  mt-14">
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm  bg-gray-700 mb-4">
                <h5 class="mb-2 text-l font-bold tracking-tight text-gray-900">Total Penjualan : </h5>
                <p class="font-normal text-gray-700 ">{{ 'Rp ' . number_format($totalPrice, 0, ',', '.') }}</p>
            </div>

            <div class="relative overflow-x-auto">

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>`
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Penjualan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($saleDetails as $sale)
                            <tr class="bg-white border-b border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $no++ }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $sale->product_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $sale->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $sale->quantity }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ 'Rp ' . number_format($sale->price, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <form action="/">
            <div id="date-range-picker" date-rangepicker class="flex items-center mt-8 space-x-4">
                <div class="relative w-1/3">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Pilih tanggal Mulai" autocomplete="off" value="{{$startDate ??= false}}" >
                </div>
        
                <span class="text-gray-500">sampai</span>
        
                <div class="relative w-1/3">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"  placeholder="Pilih tanggal akhir"autocomplete="off" value="{{$endDate??=false}}"  >
                </div>
        
                <div class="relative w-1/3">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 w-full">
                        Cari
                    </button>
                </div>
            </div>
        </form>
        <x-chart></x-chart>
    </div>

    </div>
    <div type="hidden" id="chartData" data-labels="{{ json_encode($labels) }}"
        data-prices="{{ json_encode($prices) }}">
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>


</html>
