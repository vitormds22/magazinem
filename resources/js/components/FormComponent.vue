<template>
    <form>
        <div class="py-4"></div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-md-4">
                <div style="margin-left: 95px;">
                    <h2>Dados cadastrais</h2>
                </div>
                <div class="form-row">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome da cliente">
                </div>
                
                <div class="py-2"></div>

                <div class="form-row">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="Digite o email da cliente">
                </div>
                
                <div class="py-2"></div>
                
                <div class="form-row">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="Digite o telefone da cliente">
                </div>
                
                <div class="py-2"></div>
                
                <div class="form-row">
                    <label for="telefone">Data de nascimento</label>
                    <input type="date" class="form-control" name="data-nascimento">
                </div>
                
                <div class="py-2"></div>
                
                <div class="form-row">
                    <button type="submit" class="btn btn-lg btn-primary">Adicionar</button>
                </div>
            </div>
            
        </div>
    </form>
</template>

<script>
export default {
    
}
</script>

<style scoped>

</style>