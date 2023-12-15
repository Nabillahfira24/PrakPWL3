<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white light:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <x-primary-button tag="a" href="{{ route('book.create') }}">
                        Tambah Buku
                    </x-primary-button>
                    <br><br>
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tahun</th>
                                <th>Penerbit</th>
                                <th>Kota</th>
                                <th>Cover</th>
                                <th>Kuantitas</th>
                                <th>Kode Rak</th>
                                <th>Aksi</th>
                            </tr>
                        </x-slot>

                        @php $num=1; @endphp
                        @foreach ($books as $book)

                        <tr class="text-center">
                            <td>{{ $num++ }} </td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->city }}</td>
                            <td class="text-center">
                                <img src="{{ asset('storage/cover_buku/'.$book->cover) }}" width="100px" class="mx-auto" />
                            </td>
                            <td>{{ $book->qty }}</td>
                            <td>{{ $book->bookshelf->code }}-{{ $book->bookshelf->name }}</td>
                            <td>
                                <x-primary-button tag="a" href="{{ route('book.edit', $book->id) }}">Edit</x-primary-button>
                            </td>
                        </tr>

                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>