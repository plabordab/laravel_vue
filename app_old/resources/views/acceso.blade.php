@extends ("layout")
@section("menu")
    <x-layout.menu class="justify-start h-full">
        {{--        <h1>Rol: -{{auth()->user()->roles()->get()}}-</h1>--}}

        @role("personal")
        <x-form.a_href href="{{route('empleado.index')}}" class="mx-2">Empelados</x-form.a_href>
        @endrole
        @role("comercial")
        <x-form.a_href href="{{route('cliente.index')}}" class="mx-2">Clientes</x-form.a_href>
        @endrole
        @role("contable")
        <x-form.a_href href="{{route('factura.index')}}" class="mx-2">Facturas</x-form.a_href>
        @endrole
        @role("administrador")
            <x-form.a_href href="{{route('roles')}}" class="mx-2">Roles</x-form.a_href>
        @endrole
    </x-layout.menu>
@endsection

@section("contenido")
    <div class="max-h-full flex flex-row justify-center bg-gray-300">
        <img src="{{asset("images/uml.png")}}" alt="uml">
    </div>
@endsection

