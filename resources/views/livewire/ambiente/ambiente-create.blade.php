<div class="mt-0">
    <div class="card mt-3">
        <h5 class="card-header">Cadastro de Ambientes</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome"
                        placeholder="">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao" id="descricao" rows="4" wire:model="descricao"></textarea>
                </div>

                <div class="mb-3">
                    <label for="status" class="">Status</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault">
                        <label class="form-check-label" for="switchCheckDefault" wire:model='status'>Desativo/Ativo</label>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('ambiente.index')}}"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                </div>

            </form>
        </div>
    </div>
</div>
