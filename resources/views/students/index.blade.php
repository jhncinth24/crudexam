@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>

<header class="max-w-lg max-auto mt-5">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center uppercase">Student List</h1>
    </a>
</header>
<section class="mt-10">
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto w-full text-sm text-left text-gray-500">
            <thead class="text-xs text gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        age
                    </th>
                    <th scope="col" class="py-3 px-6">

                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                <tr class="bg-gray-300 border-b">
                    <td class="py-4 px-6">
                        {{ $student->first_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->last_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->age }}
                    </td>
                    <td>
                        <a href="/student/ {{ $student->id }}" class="bg-sky-600 px-4 text-white py-1">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-auto max-w-lg pt-6 p-4">
        {{ $students->links()}}
        </div>
    </div>
</section>
@include('partials.footer')

{{-- <ul>
    @foreach ($students as $student)
    
    <li>{{ $student->first_name }} {{ $student->last_name }}</li>
    
    @endforeach

</ul> --}}