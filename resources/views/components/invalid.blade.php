<x-slot name="popup">
    <section {{ $attributes->merge(["class"=>"absolute w-full flex justify-center z-20"]) }}>
        <div class="w-[420px] h-[150px] rounded-[20px] bg-ghost-white justify-center pl-[26px] pr-[12px] py-[16px] border-[2px]">
            <h3 class="font-lato font-bold text-[20px]">www.uip.ph says</h3>
            <h3 class="font-lato text-[15px] mt-[12px]">Invalid Gdrive Link</h3>
            <div class="flex justify-end mt-[11.5px]">
                <button class="bg-white w-[96px] h-[40px] rounded-[10px]"><h3 class="font-lato text-[16px]">OK</h3></button>
            </div>
        </div>
    </section>
</x-slot>