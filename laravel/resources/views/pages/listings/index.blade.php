<x-layout>
    <div class="w-full flex justify-center items-center flex-col gap-[40px] mt-[40px]">
        <x-filter :regions="$regions" />
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 mt-[40px]">
            @foreach ($realEstates as $realEstate)
            <div class="max-w-sm border bg-[#FFFFFF] border-[#DBDBDB] rounded-lg shadow ">
                <a href="{{ route('real-estate.show', $realEstate->id) }}">
                    <img class="rounded-t-lg h-[307px]" src={{$realEstate->image}} alt={{$realEstate->address}} />
                </a>
                <div class="p-5 ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#021526]">{{$realEstate->price}} ₾</h5>
                    </a>
                    <div
                        class="mb-3  text-[#021526B2]/70 text-[16px] leading-[19.2px] font-[400] w-full flex justify-start items-center gap-2">
                        <img src="/icons/Icon.png" alt="location" />
                        <p>{{$realEstate->city->name}}, {{$realEstate->address}}</p>
                    </div>
                    <div class="w-full flex justify-start items-center gap-6">
                        <div class="flex justify-start items-center gap-2">
                            <img class="rounded-t-lg" src="/icons/bed.png" alt="bed" />
                            <p>{{$realEstate->bedrooms}}</p>
                        </div>
                        <div class="flex justify-start items-center gap-2">
                            <img class="rounded-t-lg" src="/icons/Vector.png" alt="vector" />
                            <p>{{$realEstate->area}} მ2</p>
                        </div>
                        <div class="flex justify-start items-center gap-2">
                            <img class="rounded-t-lg" src="/icons/Vector1.png" alt="vector1" />
                            <p>{{$realEstate->zip_code}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>