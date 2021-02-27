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
            <td id="clientes" v-for="(ind, i) in cliente" :key="i">{{cliente[i]}}</td>
            <td id="acoes">
                <button class="btn btn-success">visual</button>
                <button class="btn btn-success">modal</button>
                <button class="btn btn-warning">editar</button>
                <button class="btn btn-danger">excluir</button>
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
    th{
        text-align: center;
    }
    .btn{
        margin-right: 20px;
        padding: 10px;
    }
    #clientes{
        vertical-align: middle;
    }
</style>