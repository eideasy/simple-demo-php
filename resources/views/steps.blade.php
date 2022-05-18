<div class="text-center mb-14">
    <div class="w-16 h-16 rounded-full border-4 border-teal-400 inline-block text-4xl text-center leading-tight font-bold text-teal-400">1</div>
    <div class="text-2xl md:text-3xl mt-4">
        Find investors
    </div>
</div>

<div class="text-center mb-14">
    <div class="w-16 h-16 rounded-full border-4 border-sky-400 inline-block text-4xl text-center leading-tight font-bold text-sky-400">2</div>
    <div class="text-2xl md:text-3xl mt-4">
        Get Term Sheet from
        <br>
        <a
                href="https://startupestonia.ee/resources"
                class="text-sky-500 hover:text-sky-700 underline text-xl md:text-3xl"
                target="_blank"
        >
            https://startupestonia.ee/resources
        </a>
    </div>
</div>

<div class="text-center mb-6">
    <div class="w-16 h-16 rounded-full border-4 border-blue-600 inline-block text-4xl text-center leading-tight font-bold text-blue-600">3</div>
    <div class="text-2xl md:text-3xl mt-4">
        Fill in your term sheet and get it signed!
    </div>
</div>

<form method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="text-center mb-10">
        <input
                name="file_to_be_signed"
                type="file"
                id="file_to_be_signed"
                accept="application/pdf"
                class="border border-solid border-2 border-blue-300 rounded px-3 py-1.5 text-base max-w-xs"
        >
    </div>

    <div class="text-center">
        <button
                type="submit"
                class="inline-flex
                        justify-center
                        py-3
                        px-7
                        border
                        border-transparent
                        shadow-sm
                        text-2xl
                        font-medium
                        rounded-md
                        text-white
                        bg-blue-600
                        hover:bg-blue-700
                        focus:outline-none
                        focus:ring-2
                        focus:ring-offset-2
                        focus:ring-blue-500"
        >
            <span>Get it signed!</span>
        </button>
    </div>
</form>
