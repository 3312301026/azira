<script src="https://cdn.tailwindcss.com"></script>

<div class="ml-10 mt-20">
    <table class="table-auto border-collapse border border-slate-400">
        <thead class="bg-pink-500">
            <tr>
                <th class="border border-gray-300 px-4 py-2">No</th>
                <th class="border border-gray-300 px-4 py-2">Nama Poduk</th>
                <th class="border border-gray-300 px-4 py-2">Deskripsi Produk</th>
                <th class="border border-gray-300 px-4 py-2">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $index + 1}}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $desc[$index] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $harga[$index] }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>


