<template>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(cliente, index) in clientes" :key="index">
            <td v-for="(ind, i) in cliente" :key="i">{{cliente[i]}}</td>
            <td>
                <button>visual</button>
                <button>editar</button>
                <button>excluir</button>
            </td>
        </tr>
    </tbody>
</table>
</template>

<script>
export default {
    props:['clientes'],
    data(){
        return ({
            
        })
    }
}
</script>

<style scoped>

</style>