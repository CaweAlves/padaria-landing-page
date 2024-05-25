<div x-data="{ expanded: false }" class="md:hidden">

    <div
        class="text-center flex justify-between md:block bg-gradient-to-r from-yellow-900 to-yellow-950 py-5 px-2">
        <h1><img src="{{ asset('images/logo.png') }}" alt="logo" class="h-20"></h1>
        <button type="button" x-on:click="expanded = !expanded" class="z-50 text-white">
            <span x-show="!expanded" class="material-symbols-outlined">
                menu
            </span>
            <span x-show="expanded" class="material-symbols-outlined">
                close
            </span>
        </button>
    </div>

    <nav x-show="expanded"
        class="z-40 grid grid-rows-3 grid-cols-1  w-full  
                bg-black text-white backdrop-blur-xl opacity-85">

        <div class="text-center">
            <a href="#" class="block border border-white p-4">HOME</a>
            <a href="#" class="block border border-white p-4">PRODUTOS</a>
            <a href="#" class="block border border-white p-4">LOCALIZAÇÃO</a>
            <a href="#" class="block border border-white p-4">CONTATO</a>
        </div>

        <div class="text-center mt-5 md:mt-0 md:flex justify-end md:mx-5  md:self-center">
            <h1>Sou Funcionario</h1>
        </div>
    </nav>
</div>
