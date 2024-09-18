@props(['regions'])

<?php
// Gather all current query parameters including new filters
$queryParams = array_merge(
    request()->query(), 
    [
        'region' => request('region'),
        'price' => request('price'),
        'area' => request('area'),
        'bedrooms' => request('bedrooms')
    ]
);

$searchArr = array_filter($queryParams, function($value) {
    return !empty($value);
});
?>

<div class="max-w-[1596px] w-full flex justify-between items-center">
    <div class="flex justify-center items-start flex-col gap-2">
        <div class="flex justify-start items-center gap-4">
            <form method="GET" action="{{ route('real-estate.index') }}"
                class="max-w-[785px] w-full h-[47px] flex justify-start items-center gap-2">
                <select name="region" onchange="this.form.submit()">
                    <option value="">რეგიონი</option>
                    @foreach ($regions as $region)
                    <option value="{{ $region->name }}" {{ request('region')==$region->name ? 'selected' : '' }}>
                        {{ $region->name }}
                    </option>
                    @endforeach
                </select>

                <select name="price" onchange="this.form.submit()">
                    <option value="">საფასო კატეგორია</option>
                    @foreach(['50000-100000', '100000-150000', '150000-200000', '200000-250000', '250000-300000',
                    '300000-350000', '350000-400000', '400000-450000', '450000-500000'] as $range)
                    <option value="{{ $range }}" {{ request('price')==$range ? 'selected' : '' }}>
                        {{ $range }}
                    </option>
                    @endforeach
                </select>

                <select name="area" onchange="this.form.submit()">
                    <option value="">ფართობი</option>
                    @foreach(['50000-100000', '100000-150000', '150000-200000', '200000-250000', '250000-300000',
                    '300000-350000', '350000-400000', '400000-450000', '450000-500000'] as $range)
                    <option value="{{ $range }}" {{ request('area')==$range ? 'selected' : '' }}>
                        {{ $range }}
                    </option>
                    @endforeach
                </select>

                <select name="bedrooms" onchange="this.form.submit()">
                    <option value="">საძინებლების რაოდენობა</option>
                    @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}" {{ request('bedrooms')==$i ? 'selected' : ''
                        }}>
                        {{ $i }}
                        </option>
                        @endfor
                </select>
            </form>
        </div>

        <div class="w-full flex justify-start items-center gap-2">
            @foreach ($searchArr as $key => $value)
            <div class="border-[1px] border-[#DBDBDB] px-[10px] py-[6px] rounded-[43px] flex items-center gap-2">
                <span class="text-[#021526CC] text-[14px] text-center font-[400]">{{ ucfirst($key) }}: {{ $value
                    }}</span>
                <form method="GET" action="{{ route('real-estate.index') }}" class="flex">
                    @foreach ($queryParams as $paramKey => $paramValue)
                    @if ($paramKey !== $key)
                    <input type="hidden" name="{{ $paramKey }}" value="{{ $paramValue }}">
                    @endif
                    @endforeach
                    <button type="submit" class="text-red-500 hover:text-red-700">x</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

    <div class="w-[509px] flex justify-end items-center gap-[16px]">
        <button
            class="bg-[#F93B1D] text-[#FFFFFF] hover:bg-[#aa3030] w-full rounded-[10px] px-[16px] py-[10px] text-[16px] leading-[19.2px] font-[500]">
            + ლისტინგის დამატება
        </button>
        <button
            class="bg-transparent text-[#F93B1D] hover:bg-[#F93B1D] hover:text-[#FFFFFF] text-[16px] leading-[19.2px] font-[500] border-[1px] border-[#F93B1D] w-full rounded-[10px] px-[16px] py-[10px]">
            + აგენტის დამატება
        </button>
    </div>
</div>