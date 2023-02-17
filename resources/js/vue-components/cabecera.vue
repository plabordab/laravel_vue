<template>
    <div  class="cabecera" >
    <div id="logo">

    </div>
<h1>Datos de la empresa</h1>
    <form action="{{route('login')}}">
        <input type="submit" value="login">
    </form>
    <form action="{{route('register')}}">
        <input type="submit" value="Registro">
    </form>
    </div>
</template>

<script>
export default {

}
</script>

<style >
.cabecera{
    @apply bg-red-500 flex flex-row justify-around
}
</style>
