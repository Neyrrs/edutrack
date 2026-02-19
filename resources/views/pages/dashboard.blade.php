@extends('layouts.mainLayout')

@section('content')
<div class="py-12">        
    <h1 class='text-4xl pb-5 font-semibold'>Say hi! to your <span class='font-bold mono text-blue-500'>Dashboard</span></h1>
    <div class="flex flex-col gap-10">
        <div class="w-full max-h-100 bg-[#e9ebff] rounded-xl px-8 py-6 text-black flex flex-col gap-2">
            <p class='text-2xl font-semibold'>Your most used categories in Edutrack</p>
            {!! $chart->container() !!}
            {!! $chart->script() !!}
        </div>
        <div class="overflow-x-auto">
            <div class="w-full h-full bg-[#e9ebff] rounded-xl px-8 py-10 text-black flex flex-col gap-4">
                <div class="space-y-1">
                    <p class='text-2xl font-semibold'>List of your activities</p>
                    <p class='text-sm w-xl'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa omnis excepturi temporibus tenetur ducimus placeat maiores incidunt libero reprehenderit sint.</p>
                </div>
                <table class="min-w-full divide-y-2 border rounded-md border-gray-400 divide-gray-200 my-4">
                    <thead class="ltr:text-left rtl:text-right bg-blue-200">
                    <tr class="*:font-semibold *:text-gray-900">
                        <th class="px-3 py-2 whitespace-nowrap">Name</th>
                        <th class="px-3 py-2 whitespace-nowrap">DoB</th>
                        <th class="px-3 py-2 whitespace-nowrap">Role</th>
                        <th class="px-3 py-2 whitespace-nowrap">Salary</th>
                        <th class="px-3 py-2 whitespace-nowrap">Action</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">Nandor the Relentless</td>
                        <td class="px-3 py-2 whitespace-nowrap">04/06/1262</td>
                        <td class="px-3 py-2 whitespace-nowrap">Vampire Warrior</td>
                        <td class="px-3 py-2 whitespace-nowrap">$0</td>
                    </tr>

                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">Laszlo Cravensworth</td>
                        <td class="px-3 py-2 whitespace-nowrap">19/10/1678</td>
                        <td class="px-3 py-2 whitespace-nowrap">Vampire Gentleman</td>
                        <td class="px-3 py-2 whitespace-nowrap">$0</td>
                    </tr>

                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">Nadja</td>
                        <td class="px-3 py-2 whitespace-nowrap">15/03/1593</td>
                        <td class="px-3 py-2 whitespace-nowrap">Vampire Seductress</td>
                        <td class="px-3 py-2 whitespace-nowrap">$0</td>
                    </tr>

                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">Colin Robinson</td>
                        <td class="px-3 py-2 whitespace-nowrap">01/09/1971</td>
                        <td class="px-3 py-2 whitespace-nowrap">Energy Vampire</td>
                        <td class="px-3 py-2 whitespace-nowrap">$53,000</td>
                    </tr>

                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">Guillermo de la Cruz</td>
                        <td class="px-3 py-2 whitespace-nowrap">18/11/1991</td>
                        <td class="px-3 py-2 whitespace-nowrap">Familiar/Vampire Hunter</td>
                        <td class="px-3 py-2 whitespace-nowrap">$0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection