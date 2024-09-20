<x-layout>
    <div class="w-full flex justify-center items-centers flex-col gap-4">
        <div class="max-w-[1591px] w-full h-[714px] grid grid-cols-2 gap-[60px]">
            <div class="w-[839px] h-[670px]">
                <img src="{{$realEstate->image}}" class="rounded-md" />
            </div>
            <div class="w-[503px] h-[670px] flex flex-col justify-start items-start gap-4">
                <h2 class="font-[700] text-[40px] leading-[57.6px] text-[#021526]">{{$realEstate->price}} ₾</h2>
                <div class="w-full flex justify-center items-start flex-col gap-4">
                    <div class="w-[450px] flex items-center justify-start gap-2">
                        <img src="/icons/Icon.png" />
                        <p class="text-[20px] font-[400] leading-[28.8px] text-[#808A93]">
                            {{$realEstate->city->name}},{{$realEstate->address}}</p>
                    </div>
                    <div class="w-[450px] flex items-center justify-start gap-2">
                        <img src="/icons/Vector.png" />
                        <p class="text-[20px] font-[400] leading-[28.8px] text-[#808A93]">ფართი {{$realEstate->area}} მ2
                        </p>
                    </div>
                    <div class="w-[450px] flex items-center justify-start gap-2">
                        <img src="/icons/bed.png" />
                        <p class="text-[20px] font-[400] leading-[28.8px] text-[#808A93]">საძინებელი
                            {{$realEstate->bedrooms}}</p>
                    </div>
                    <div class="w-[450px] flex items-center justify-start gap-2">
                        <img src="/icons/Vector1.png" />
                        <p class="text-[20px] font-[400] leading-[28.8px] text-[#808A93]">საფოსტო ინდექსი
                            {{$realEstate->zip_code}}</p>
                    </div>
                </div>
                <div class="w-[480px] flex justify-start items-center">
                    <p class="text-[16px] leading-[26px] font-[400] text-[#808A93]">{{$realEstate->description}}</p>
                </div>
                <div
                    class="w-[503px] border-[1px] p-[16px] border-[#DBDBDB] rounded-[8px] flex justify-start items-center flex-col gap-2">
                    <div class="w-full flex justify-start items-center gap-4">
                        <img src={{$realEstate->agent->avatar}} alt="user" />
                        <div class="flex flex-col justify-center items-start gap-1">
                            <p class="text-[16] leading-[19.2px] font-[400] text-[#808A93]">
                                {{$realEstate->agent->name}}
                            </p>
                            <p class="text-[14px] leading-[26px] font-[400] text-[#808A93]">
                                {{$realEstate->agent->email}}
                            </p>
                        </div>
                    </div>
                    <div class="w-full flex justify-start items-center flex-col gap-2">
                        <div class="w-full flex items-center gap-2">
                            <img src="/icons/Shape.png" />
                            <p class="text-[14px] font-[400] leading-[16.8px] text-[#808A93]">
                                {{$realEstate->agent->email}}</p>
                        </div>
                        <div class="w-full flex items-center gap-2">
                            <img src="/icons/Vector2.png" />
                            <p class="text-[14px] font-[400] leading-[16.8px] text-[#808A93]">
                                {{$realEstate->agent->phone}}</p>
                        </div>
                    </div>
                </div>
                <form method="POST" action="/real-estates/{{$realEstate->id}}"
                    class="w-full flex justify-start items-center">
                    @csrf
                    @method('DELETE')
                    <button
                        class="border-[1px] border-[#676E76] p-[10px] rounded-[8px] font-[500] text-[12px] leading-[14.4px] text-center">ლისტინგის
                        წაშლა</button>
                    </fo>
            </div>
        </div>
    </div>
</x-layout>