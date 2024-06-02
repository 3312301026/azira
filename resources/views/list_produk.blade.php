<script src="https://cdn.tailwindcss.com"></script>
<link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

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
<div><b><h1>Input Produk</h1></b></div>
<from method = "POST" action = "{{ route('produk.simpan') }}">
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3"><input type="text" class="form-control" id ="nama" name ="nama"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3"><textarea class="form-control" id ="deskripsi" name ="deskripsi"></textarea></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><input type="number" class ="form-control" id ="harga" name ="harga"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="simpan" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">simpan</button>
</form>


