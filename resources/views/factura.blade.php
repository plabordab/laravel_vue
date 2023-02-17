@extends ("layout");
{{--@section("menu")--}}
{{--    <x-layout.menu class="justify-center">--}}
{{--        <x-form.a_href  class="mx-2" href="{{route('factura.create')}}"> Crear factura</x-form.a_href>--}}
{{--        <x-form.a_href   class="mx-2" href="{{route('acceso')}}"> Salir</x-form.a_href>--}}
{{--    </x-layout.menu>--}}
{{--@endsection--}}

@section("contenido")
{{--    {{dd($campos)}}--}}

    <mi_tabla titulos='@json($campos)' filas='@json($facturas)'></mi_tabla>
{{--    <table class="m-20 overscroll-y-auto overflow-hidden">--}}
{{--        <tr>--}}
{{--            <th class="ml-10">Factura</th>--}}
{{--            <th class="ml-10">Cliente</th>--}}
{{--            <th class="ml-10">Número de pedido</th>--}}
{{--            <th class="ml-12">Unidades</th>--}}
{{--            <th class="ml-12">Precio base</th>--}}
{{--            <th class="ml-12">Total a pagar</th>--}}
{{--            <th class="ml-12">Editar</th>--}}
{{--            <th class="ml-12">Borrar</th>--}}
{{--        </tr>--}}
{{--        @foreach($facturas as $factura)--}}
{{--            <tr>--}}
{{--                <td>{{$factura->id}}</td>--}}
{{--                <td>{{$factura->cliente}}</td>--}}
{{--                <td>{{$factura->pedido}}</td>--}}
{{--                <td>{{$factura->unidades}}</td>--}}
{{--                <td>{{$factura->precio_base}}</td>--}}
{{--                <td>{{$factura->total}}</td>--}}
{{--                <td>--}}
{{--                    <form action="{{route('factura.edit',[$factura])}}" method=get">--}}
{{--                        <x-form.input_submit value="Editar"/>--}}

{{--                    </form>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <form action="{{route('factura.destroy',[$factura])}}" method='POST'>--}}
{{--                        @csrf--}}
{{--                        @method('delete')--}}
{{--                        <x-form.input_submit value="Borrar" />--}}

{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}
@endsection
